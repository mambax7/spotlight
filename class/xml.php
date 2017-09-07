<?php

/*
* Mini Spotlights
* Presented by Brandycoke Productions  <http://www.brandycoke.com>
* Programmed exclusively for GuitarGearHeads <http://www.guitargearheads.com>
* Licensed under the terms of GNU General Public License
* http://www.gnu.org/copyleft/gpl.html
*
* XOOPS - PHP Content Management System
* Copyright (c) 2000-2016 XOOPS.org <https://xoops.org>
*/

/**
 * Class SpotlightXml
 */
class SpotlightXml extends XoopsObject
{
    /**
     * SpotlightXml constructor.
     */
    public function __construct()
    {
        parent::__construct();
        //  key, data_type, value, req, max, opt
        $this->initVar('xml_id', XOBJ_DTYPE_INT);
        $this->initVar('xml_url', XOBJ_DTYPE_TXTBOX, '', false, 255);
        $this->initVar('xml_title', XOBJ_DTYPE_TXTBOX, '', true, 255);
        $this->initVar('xml_text', XOBJ_DTYPE_TXTAREA, '', true);
        $this->initVar('xml_order', XOBJ_DTYPE_INT, 0, false, 2);
    }

    /**
     * @param $caption
     * @return XoopsThemeForm
     */
    public function editForm($caption)
    {
        $form  = new XoopsThemeForm($caption, 'xml', xoops_getenv('PHP_SELF'), 'post', true);
        $t_url = new XoopsFormText(_AM_SPOT_XML_URL, 'xml_url', 50, 255, $this->getVar('xml_url', 'e'));
        $t_url->setDescription(_AM_SPOT_XML_URL_DESC);

        $form->addElement(new XoopsFormText(_AM_SPOT_XML_ORDER, 'xml_order', 3, 2, $this->getVar('xml_order', 'e')));
        $form->addElement($t_url);
        $form->addElement(new XoopsFormText(_AM_SPOT_XML_TITLE, 'xml_title', 50, 255, $this->getVar('xml_title', 'e')), true);
        $form->addElement(new XoopsFormTextArea(_AM_SPOT_XML_TEXT, 'xml_text', $this->getVar('xml_text', 'e'), 10), true);
        $form->addElement(new XoopsFormButton('', '', _AM_SPOT_SUBMIT, 'submit'));
        $form->addElement(new XoopsFormHidden('op', 'save'));
        if (!$this->isNew()) {
            $form->addElement(new XoopsFormHidden('xml_id', $this->getVar('xml_id')));
        }

        return $form;
    }
}

/**
 * Class SpotlightXmlHandler
 */
class SpotlightXmlHandler extends XoopsObjectHandler
{
    public $db;
    public $db_table;
    public $obj_class = 'SpotlightXml';

    /**
     * SpotlightXmlHandler constructor.
     * @param XoopsDatabase $db
     */
    public function __construct(XoopsDatabase $db)
    {
        $this->db       = $db;
        $this->db_table = $this->db->prefix('spotlight_xml');
    }

    /**
     * @param XoopsDatabase $db
     * @return static
     */
    public function getInstance(XoopsDatabase $db)
    {
        static $instance;
        if (null === $instance) {
            $instance = new static($db);
        }

        return $instance;
    }

    /**
     * @return mixed
     */
    public function &create()
    {
        $obj = new $this->obj_class();
        $obj->setNew();

        return $obj;
    }

    /**
     * @param int    $id
     * @param string $query
     * @return bool
     */
    public function &get($id, $query = '*')
    {
        $id = (int)$id;
        if ($id > 0) {
            $sql = 'SELECT ' . $query . ' FROM ' . $this->db_table . ' WHERE xml_id=' . $id;
            if (!$result = $this->db->query($sql)) {
                return false;
            }
            $numrows = $this->db->getRowsNum($result);
            if ($numrows == 1) {
                $obj = new $this->obj_class();
                $obj->assignVars($this->db->fetchArray($result));

                return $obj;
            }

            return false;
        }

        return false;
    }

    /**
     * @param null $criteria
     * @return bool
     */
    public function getCount($criteria = null)
    {
        $sql = 'SELECT COUNT(*) FROM ' . $this->db_table;
        if (isset($criteria) && is_subclass_of($criteria, 'criteriaelement')) {
            $sql .= ' ' . $criteria->renderWhere();
        }
        if (!$result =& $this->db->query($sql)) {
            return false;
        }
        list($count) = $this->db->fetchRow($result);

        return $count;
    }

    /**
     * @param null $criteria
     * @param bool $id_as_key
     * @return array|bool
     */
    public function &getObjects($criteria = null, $id_as_key = false)
    {
        $myReturn = false;
        $ret      = [];
        $limit    = $start = 0;
        $sql      = 'SELECT * FROM ' . $this->db_table;
        if (isset($criteria) && is_subclass_of($criteria, 'criteriaelement')) {
            $sql .= ' ' . $criteria->renderWhere();
            if ($criteria->getSort() != '') {
                $sql .= ' ORDER BY ' . $criteria->getSort() . ' ' . $criteria->getOrder();
            }
            $limit = $criteria->getLimit();
            $start = $criteria->getStart();
        }
        if (!preg_match('/ORDER\ BY/', $sql)) {
            $sql .= ' ORDER BY xml_order ASC';
        }
        //      die($sql);exit();
        $result = $this->db->query($sql, $limit, $start);
        if (!$result) {
            return $myReturn;
        }
        while ($myrow = $this->db->fetchArray($result)) {
            $obj = new $this->obj_class();
            $obj->assignVars($myrow);
            if (!$id_as_key) {
                $ret[] =& $obj;
            } else {
                $ret[$myrow['xml_id']] =& $obj;
            }
            unset($obj);
        }

        $myReturn = (count($ret) > 0) ? $ret : false;

        return $myReturn;
    }

    /**
     * @param XoopsObject $obj
     * @param bool        $force
     * @return bool
     */
    public function insert(XoopsObject $obj, $force = false)
    {
        // if ( strtolower(get_class($obj)) != strtolower($this->obj_class) ) { et modif thecat
        if (strtolower(get_class($obj)) != strtolower($this->obj_class)) {
            return false;
        }
        if (!$obj->isDirty()) {
            return true;
        }
        if (!$obj->cleanVars()) {
            return false;
        }
        foreach ($obj->cleanVars as $k => $v) {
            ${$k} = $v;
        }
        if (count($obj->getErrors()) > 0) {
            return false;
        }
        if ($obj->isNew() || empty($xml_id)) {
            $xml_id = $this->db->genId($this->db_table . '_xml_id_seq');
            $sql    = sprintf('INSERT INTO %s (
                xml_id, xml_url, xml_title, xml_text, xml_order
                ) VALUES (
                %u, %s, %s, %s, %u
                )', $this->db_table, $xml_id, $this->db->quoteString($xml_url), $this->db->quoteString($xml_title), $this->db->quoteString($xml_text), $xml_order);
        } else {
            $sql = sprintf('UPDATE %s SET
                xml_url = %s,
                xml_title = %s,
                xml_text = %s,
                xml_order = %u
                WHERE xml_id = %u', $this->db_table, $this->db->quoteString($xml_url), $this->db->quoteString($xml_title), $this->db->quoteString($xml_text), $xml_order, $xml_id);
        }
        if (false != $force) {
            $result = $this->db->queryF($sql);
        } else {
            $result = $this->db->query($sql);
        }
        if (!$result) {
            $obj->setErrors('Could not store data in the database.<br>' . $this->db->error() . ' (' . $this->db->errno() . ')<br>' . $sql);

            return false;
        }
        if (empty($xml_id)) {
            $xml_id = $this->db->getInsertId();
        }
        $obj->assignVar('xml_id', $xml_id);

        return $xml_id;
    }

    /**
     * @param null $criteria
     * @return bool|string
     */
    public function deleteAll($criteria = null)
    {
        $sql = 'DELETE FROM ' . $this->db_table;
        if (isset($criteria) && is_subclass_of($criteria, 'criteriaelement')) {
            $sql .= ' ' . $criteria->renderWhere();
        }
        if (!$result = $this->db->query($sql)) {
            return $this->db->error() . ' (' . $this->db->errno() . ')<br>' . $sql;
        }

        return false;
    }

    /**
     * @return string
     */
    public function genXml()
    {
        if ($ticks = $this->getObjects()) {
            $xml  = '';
            $tmpl = "<news>\n\t<header>\n\t\t%s\n\t</header>\n\t<body>\n\t\t%s\n\t</body>\n\t<link>\n\t\t%s\n\t</link>\n</news>\n";
            foreach ($ticks as $t) {
                $xml .= sprintf($tmpl, $t->getVar('xml_title', 'n'), $t->getVar('xml_text', 'n'), str_replace('{X_SITEURL}', XOOPS_URL . '/', $t->getVar('xml_url', 'n')));
            }
            $filename = XOOPS_CACHE_PATH . '/newsticker.xml';
            if ($file = @fopen($filename, 'w')) {
                fwrite($file, $xml);
                fclose($file);
            }
        }

        return $xml;
    }
}
