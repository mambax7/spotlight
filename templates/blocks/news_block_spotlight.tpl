<{if $block.select_template != "1"}>
    <table border="0" cellpadding="5" cellspacing="10" width="100%">
        <tr>
            <td colspan="3">
                <table cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="48%" valign="top">
                            <table cellspacing="0" cellpadding="0">
                                <tr>
                                    <td style="line-height: 16px;" colspan="2">
                                        <{if $block.storyid != "0"}>
                                            <a href="<{$xoops_url}>/modules/news/article.php?storyid=<{$block.storyid}>">
                                                <div class="itemHead"><span
                                                            class="itemTitle"><{$block.newstitle}></span></div>
                                            </a>
                                        <{else}>
                                            <{$block.newstitle}>
                                        <{/if}>
                                    </td>
                                </tr>
                                <tr>
                                    <{if $block.storyid != "0"}>
                                        <td colspan="2" style="line-height: 10px;">
                                            <div class='even'><span class="itemPoster"><span
                                                            style="font-weight: bold;"><{$block.lang_by}></span> <{$block.author}></span>
                                            </div>
                                        </td>
                                    <{/if}>
                                </tr>
                                <tr>
                                    <td width="10%">
                                        <{if $block.image != ""}>
                                            <div align="<{$block.imagealign}>">
                            <span style="float:center; background-color: transparent;">
                                <a href="<{$xoops_url}>/modules/news/article.php?storyid=<{$block.storyid}>">
                                <img src="<{$xoops_url}>/<{$block.imgpath}>/<{$block.image}>" alt="<{$block.newstitle}>"
                                     width="<{$block.imgwidth}>" height="<{$block.imgheight}>"/>
                                </a>
                            </span>
                                            </div>
                                        <{/if}>
                                    <td width="90%" align=justify colspan="2"><{$block.hometext_news}></td>
                                </tr>
                                <tr align="left">
                                    <{if $block.storyid != 0}>
                                        <td style="line-height: 20px;" valign="top" colspan="2"> <span
                                                    style="font-size: small;">
                      <a href="<{$xoops_url}>/modules/news/article.php?storyid=<{$block.storyid}>"><{$block.lang_read}></a>
                                                <!-- Only registered users see comments -->
                                                <{if $xoops_userid != ""}> &nbsp;|&nbsp;<{$block.comments}>&nbsp;<{$block.lang_comments}>&nbsp;|
                                                    <a href="<{$xoops_url}>/modules/news/comment_new.php?com_itemid=<{$block.storyid}>">
                      <{$block.lang_write}> </a>
                                                <{/if}> </span>
                                        </td>
                                    <{/if}>
                                </tr>
                            </table>
                        </td>
                        <td width="2%">&nbsp;</td>
                        <td valign="top">
                            <{* mini spotlights starts here *}>
                            <table cellspacing="0" cellpadding="3">
                                <tr>
                                    <td>
                                        <div class="itemHead"><span
                                                    class="itemTitle"><{$smarty.const._MB_SPOT_MINI_BLOCK_TITLE}></span>
                                        </div>
                                    </td>
                                </tr>
                                <{foreach item=m from=$block.mini}>
                                    <tr>
                                        <td>
                                            <{if $m.img != ""}>
                                                <img src="<{$xoops_url}>/<{$block.imgpath}>/<{$m.img}>" alt=""
                                                     style="margin: 4px;" align="<{$m.align}>"/>
                                            <{/if}>
                                            <{$m.text}>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">
                                            <a href="<{$xoops_url}>/modules/news/article.php?storyid=<{$m.storyid}>"><{$block.lang_read}></a>
                                        </td>
                                    </tr>
                                <{/foreach}>
                            </table>
                            <{* mini spotlights ends here *}>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr align="left">
            <td colspan="3" style="line-height: 10px;">&nbsp;</td>
        </tr>
        <!-- If webmaster selected to include other news -->
        <{if $block.lang_other_news !=""}>
            <tr></tr>
            <tr>
                <td class='head' style="line-height: 15px;" colspan="3">
                    <div style="margin-bottom: 0; padding-left: 2px;">
                        <div align="left" style="font-weight: bold;"><{$block.lang_other_news}></div>
                    </div>
                </td>
            <tr>
                <td colspan="2">
                    <{foreach item=news from=$block.stories}>
                        <table width="100%" border="0" cellspacing="1" cellpadding="2">
                        <tr>
                            <td width="90%" style="line-height: 12px;">
                                <li>
                                    <a href="<{$xoops_url}>/modules/news/article.php?storyid=<{$news.id}>"><{$news.title}></a>&nbsp;(<{$news.hitsordate}>
                                    )
                                </li>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="margin-bottom: 1px; margin-left: 16px;"><{$news.hometext}></div>
                            </td>
                        </tr>
                        </table><{/foreach}>
                </td>
                <td width="10%">
                    <object code=com.objectplanet.NewsTicker
                            archive=<{$xoops_url}>/modules/spotlight/com.objectplanet.NewsTicker.jar width=150
                            height=150>
                        <param name=header value="What's New">
                        <param name=newsURL value="<{$xoops_url}>/cache/newsticker.xml">
                        <param name=scrollSpeed value="40">
                        <param name=pauseOnMouseOver value="true">
                        <param name=wrapSpace value="25">
                    </object>
                </td>
            </tr>
        <{/if}> <{if $block.topicsel != ""}>
            <!-- Topics select form by R&B -->
            <tr>
                <td align="left" style="padding: 6px 0 0 0;" colspan="2">
                    <div align="right"><{$block.topicsel}></div>
                </td>
            </tr>
        <{/if}> <{if $block.lang_ministats != ""}>
            <tr>
                <td colspan="3">
                    <div align='center' class='even' style="line-height: 10px;  font-size: small;"><span
                                style="font-weight: bold;"><{$block.lang_ministats}>&nbsp;</span><{$block.ministats}>
                    </div>
                </td>
            </tr>
        <{/if}>
        <!-- table end -->
    </table>
<{else}>
    <table width="100%" border="0" cellspacing="1" cellpadding="2">
        <tr align="left">
            <td style="line-height: 16px;" colspan="3">
                <{if $block.storyid != "0"}>
                    <a href="<{$xoops_url}>/modules/news/article.php?storyid=<{$block.storyid}>">
                        <div class="itemHead"><span class="itemTitle"><{$block.newstitle}></span></div>
                    </a>
                <{else}>
                    <{$block.newstitle}>
                <{/if}>
            </td>
        </tr>
        <tr align="left">
            <{if $block.storyid != "0"}>
                <td colspan="2" style="line-height: 10px;">
                    <div class='even'>

                        <span class="itemPoster"><span style="font-weight: bold;"><{$block.lang_by}></span> <a
                                    href="<{$xoops_url}>/userinfo.php?uid=<{$block.uid}>"><{$block.author}></a></span>
                    </div>

                </td>
            <{/if}>
        </tr>
        <tr align="left">
            <td colspan="2" style="line-height: 10px;">&nbsp;</td>
        </tr>
        <tr>
            <td width="55%" valign="top">
                <table width="100%" border="0" cellspacing="0" cellpadding="2">
                    <tr>
                        <td>
                            <{if $block.image != ""}>
                                <div align="<{$block.imagealign}>">
                                    <a href="<{$xoops_url}>/modules/news/article.php?storyid=<{$block.storyid}>"><img
                                                src="<{$xoops_url}>/<{$block.imgpath}>/<{$block.image}>"
                                                alt="<{$block.newstitle}>" width="<{$block.imgwidth}>"
                                                height="<{$block.imgheight}>"/></a>
                                </div>
                            <{/if}>
                        </td>
                    </tr>
                    <tr> <{if $block.lang_other_news !=""}>
                            <td>
                                <p align=justify>
                <span style="float:left; margin-right: 10px; ">
            <{$block.hometext_news}>
            </span>
                                </p>
                            </td>
                        <{/if}> </tr>
                    <tr>
                        <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                        <{if $block.storyid != "0"}>
                            <td align="left">
            <span style="font-size: small;">
            <a href="<{$xoops_url}>/modules/news/article.php?storyid=<{$block.storyid}>"><{$block.lang_read}></a>
                <!-- Only registered users see comments -->
                <{if $xoops_userid != ""}> &nbsp;|&nbsp;<{$block.comments}>&nbsp;<{$block.lang_comments}>&nbsp;|
                    <a href="<{$xoops_url}>/modules/news/comment_new.php?com_itemid=<{$block.storyid}>">
            <{$block.lang_write}> </a>
                <{/if}></span>
                            </td>
                        <{/if}>
                    </tr>
                </table>
            </td>
            <td rowspan='3' valign="top"> <{if $block.lang_other_news !=""}>
                    <table width="100%" border="0" cellspacing="1" cellpadding="2">
                        <tr>
                            <td style="line-height: 10px;" align="left">
                                <div class='head' style="margin-bottom: 0; padding-left: 2px;">
                                    <div align="left" style="font-weight: bold;"><{$block.lang_other_news}></div>
                                </div>
                            </td>
                        </tr>
                        <td height="100%">
                            <{foreach item=news from=$block.stories}>
                                <table width="100%" border="0" cellspacing="1" cellpadding="2">
                                    <tr>
                                        <td style="line-height: 12px;">
                                            <li>
                                                <a href="<{$xoops_url}>/modules/news/article.php?storyid=<{$news.id}>"><{$news.title}></a>&nbsp;(<{$news.hitsordate}>
                                                )
                                            </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="margin-bottom: 1px; margin-left: 16px;"><{$news.hometext}></div>
                                        </td>
                                    </tr>
                                </table>
                            <{/foreach}>
                        </td>
                        </tr>
                    </table>
                <{else}>
                    <table width="100%" border="0" cellspacing="1" cellpadding="2">
                        <tr>
                            <td><{$block.hometext_news}></td>
                        </tr>
                    </table>
                <{/if}>    </td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td></td>
            <td align="center" style="padding: 6px 0 0 0;"><{$block.topicsel}></td>
        </tr>
        <{if $block.lang_ministats != ""}>
            <tr valign="middle">
                <td colspan="2">
                    <div align='center' class='even' style="line-height: 10px;  font-size: small;"><span
                                style="font-weight: bold;"><{$block.lang_ministats}>&nbsp;</span><{$block.ministats}>
                    </div>
                </td>
            </tr>
        <{/if}>
    </table>
<{/if}>
