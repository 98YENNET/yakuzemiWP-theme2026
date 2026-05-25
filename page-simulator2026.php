<?php get_header(); ?>

    <div class="page-contents">

        <div class="left-contents">
            <?php get_template_part('include/breadcrumbs'); ?>
            <?php get_template_part('include/sns'); ?>


            <article class="post">


                <img src="/yz/wp-content/themes/yakuzemi/wlc/pages/supporters2020/supportersmap.png" usemap="#ImageMap"
                     alt="" width="951" height="1" style="display:none;"/>

                <!------------------------------------------------------------------>
                <?php
                if (!function_exists("ytl_timeTo")) {
                    function ytl_timeTo($timestr)
                    {
                        $timestr = str_replace(":", "", $timestr);
                        $timestr = str_replace("-", "", $timestr);
                        $timestr = str_replace(" ", "", $timestr);
                        $timestr = str_replace("/", "", $timestr);
                        while (strlen($timestr) < 14) {
                            $timestr .= "0";
                        }
                        date_default_timezone_set('Asia/Tokyo');
                        //echo date('YmdHis');exit;
                        if ($timestr > date('YmdHis')) {
                            return true;
                        }
                        return false;
                    }

                    function ytl_timeFrom($timestr)
                    {
                        return !ytl_timeTo($timestr);
                    }
                }
                $sm_themeurl = "";
                $sm_themeurl = get_stylesheet_directory_uri() . "/wlc/pages/simulator/";


                $ondemandCourses = array(
                        array(
                                "オンデMaxコース", array(
                                array("4月1日開始", "850000", "37950", "
				3/16までのお申込みで
				<br />・青本一式プレゼント
				<br />・個別指導1回無料
				<br />・個別指導20％オフクーポン
				<br />
				<br />4/16までのお申込みで
				<br />・青本一式プレゼント
			"),
                        )
                        ),
                        array(
                                "じっくり青本1年コース", array(
                                array("5月1日開始", "690000", "37950", "
				4/16までのお申込みで
				<br />・青本一式プレゼント
			"),
                        ),
                        ),
                        array(
                                "ぎゅっと要点1年コース", array(
                                array("5月1日開始", "590000", "37950"),
                        ),
                        ),
                        array(
                                "ぎゅぎゅっと要点半年コース", array(
                                array("9月1日開始", "450000", "37950"),
                        ),
                        ),
                );


                ?>
                <div id="simulatorCss">
                    <link rel='stylesheet' href='<?php echo $sm_themeurl; ?>css/compiled/0-.css'
                          media='print, screen    '>
                    <link rel='stylesheet' href='<?php echo $sm_themeurl; ?>css/compiled/-767.css'
                          media='print, screen  and (max-width:767px)  '>
                    <link rel='stylesheet' href='<?php echo $sm_themeurl; ?>css/compiled/768-.css'
                          media='print, screen and (min-width:768px)   '>
                    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:300,400,500,700,900&display=swap&subset=japanese"
                          rel="stylesheet">
                </div>


                <script>
                    var smlinks = $("#simulatorCss").find("link");
                    var head = document.getElementsByTagName('head')[0];
                    for (var i = 0; i < smlinks.length; i++) {
                        console.log(smlinks[i]);
                        head.appendChild(smlinks[i]);
                    }
                </script>


                <!------------------------------------------------------------------>
                <div id="simulator">
                    <img src="<?php echo $sm_themeurl; ?>images/title.jpg"/>
                </div>


                <div class="simulatorSelect">
                    <div class="heading">
                        コースを選択
                    </div>
                    <ul>
                        <li><a href="javascript:simulator.swapCourse('Normal');">通学コース・ライブ配信コース</a></li>
                        <li><a href="javascript:simulator.swapCourse('Small');">市ヶ谷教室少人数コース</a></li>
                        <li><a href="javascript:simulator.swapCourse('Online');">オンデマンドコース</a></li>
                    </ul>
                </div>


                <div class="simulators">


                    <div class="course" id="simulatorNormal">
                        <div class="courseHead">通学コース・ライブ配信コース</div>
                        <div class="conditions">
                            <div class="heading">条件設定</div>
                            <div class="step">
                                <div class="stepTitle">コース</div>
                                <table>
                                    <tr>
                                        <th>1年</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" value="1300000" rel="courseFee"
                                                           name="normalCourseFee" id="normalCourse5"> <label
                                                            for="normalCourse5">通学コース</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="1200000" rel="courseFee"
                                                           name="normalCourseFee" id="liveCourse5"> <label
                                                            for="liveCourse5">ライブ配信コース</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>半年</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" value="1090000" rel="courseFee"
                                                           name="normalCourseFee" id="normalCourse9"> <label
                                                            for="normalCourse9">通学コース</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="1050000" rel="courseFee"
                                                           name="normalCourseFee" id="liveCourse9"> <label
                                                            for="liveCourse9">ライブ配信コース</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </div>


                            <?php if (ytl_timeTo("2026-04-01 00-01-01")) { ?>
                                <div class="step hayawari">
                                    <div class="stepTitle">割引（早割）</div>
                                    <ul class="radioWrapper">
                                        <?php if (ytl_timeTo("2026-03-17 00-01-01")) { ?>
                                            <li><input type="radio" value="-230000" rel="waribikiA"
                                                       name="normalWaribikiA" id="normalWaribikiA1"> <label
                                                        for="normalWaribikiA1">超早割　230,000円OFF</label></li>
                                        <?php } elseif (ytl_timeTo("2026-04-01 00-01-01")) { ?>
                                            <li><input type="radio" value="-210000" rel="waribikiA"
                                                       name="normalWaribikiA" id="normalWaribikiA2"> <label
                                                        for="normalWaribikiA2">早割　210,000円OFF</label></li>
                                        <?php } ?>
                                        <li><input type="radio" value="0" rel="waribikiA" name="normalWaribikiA"
                                                   id="normalWaribikiA4"> <label for="normalWaribikiA4">該当なし</label>
                                        </li>
                                    </ul>
                                </div>
                            <?php } ?>


                            <div class="step hayawari">
                                <div class="stepTitle">割引（リトライ・のりかえ）</div>
                                <ul class="radioWrapper">
                                    <li><input type="radio" value="-80000" rel="waribikiB" name="normalWaribikiB"
                                               id="normalWaribikiB1"> <label
                                                for="normalWaribikiB1">リトライ割　80,000円OFF</label><br/><span
                                                class="small">昨年度、薬ゼミに最終日まで在籍された方 (短期コースを除く)</span>
                                    </li>
                                    <li><input type="radio" value="-60000" rel="waribikiB" name="normalWaribikiB"
                                               id="normalWaribikiB2"> <label
                                                for="normalWaribikiB2">のりかえ割　60,000円OFF</label><br/><span
                                                class="small">昨年度、他の予備校の全日制コースに在籍されていた方</span>
                                    </li>
                                    <li><input type="radio" value="0" rel="waribikiB" name="normalWaribikiB"
                                               id="normalWaribikiB4"> <label for="normalWaribikiB4">該当なし</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="step hayawari">
                                <div class="stepTitle">グループ割</div>
                                <ul class="radioWrapper">
                                    <li>
                                        <input type="checkbox" value="-10000" rel="waribikiC" name="normalWaribikiB"
                                               id="normalWaribikiC1"> <label
                                                for="normalWaribikiC1">グループ割　10,000円OFF</label><br/><span
                                                class="small">事前にご登録の上、代表者申込日の翌々日までに3～10名でお申込みの方</span>
                                        <br/><span class="small"><a href="https://www.yakuzemi.ac.jp/loan"
                                                                    target="_blank">※詳しくはこちら</a></span>
                                    </li>
                                </ul>
                            </div>


                            <div class="step stepCacheback">
                                <div class="stepTitle">入校後キャッシュバック</div>
                                <div class="stepTitleAddition">各種キャッシュバックは併用できます</div>
                                <ul class="radioWrapper">
                                    <li>
                                        <input type="checkbox" value="30000" rel="cb" name="normalCB" id="normalCB2">
                                        <label for="normalCB2">ナジック割・共立メンテナンス割　30,000円キャッシュバック</label><br/>
                                        <span class="small">ナジック・共立メンテナンスの指定物件に不動産契約された方</span><br/>
                                        <span class="small"><a href="https://www.yakuzemi.ac.jp/acomo/#ichioshi"
                                                               target="_blank">※詳しくはこちら</a></span>
                                    </li>
                                    <li>
                                        <input type="checkbox" value="10000" rel="cb" name="normalCB" id="normalCB3">
                                        <label for="normalCB3">入校特典　10,000円キャッシュバック</label><br/>
                                        <span class="small"><a
                                                    href="https://www.yakuzemi.ac.jp/information/2026setsumeikai/"
                                                    target="_blank">2026年度の薬ゼミ教室説明会</a>に、一度でも参加された方</span><br/>
                                    </li>
                                </ul>
                            </div>
                            <div class="submit">受講料を確認する</div>
                        </div>


                        <div class="resultContainer">
                            <table class="result">
                                <tr>
                                    <th>受講料</th>
                                    <td class="courseFeeAmount">-</td>
                                </tr>
                                <tr class="waribiki">
                                    <th>割引</th>
                                    <td class="waribikiTotalAmount">-</td>
                                </tr>
                                <tr class="shiharai">
                                    <th>お支払い総額</th>
                                    <td class="paymentAmount">-</td>
                                </tr>
                            </table>

                            <div class="cacheBack">
                                <div class="heading">後日キャッシュバック</div>
                                <div class="result cacheBackAmount">
                                    -
                                </div>
                            </div>


                            <div class="final">
                                <div class="heading">キャッシュバック後総額</div>
                                <div class="result finalAmount">
                                    -
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="course" id="simulatorSmall">
                        <div class="courseHead">市ヶ谷教室少人数コース</div>

                        <div class="conditions">
                            <div class="heading">条件設定</div>
                            <div class="step">
                                <div class="stepTitle">コース</div>
                                <table>
                                    <tr>
                                        <th>市ヶ谷教室</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" value="2320000" rel="courseFee"
                                                           name="smallCourseFee" id="smallCourse5"> <label
                                                            for="smallCourse5">少人数コース</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <?php if (ytl_timeTo("2026-04-01 00-01-01")) { ?>
                                <div class="step hayawari">
                                    <div class="stepTitle">割引（早割）</div>
                                    <ul class="radioWrapper">
                                        <?php if (ytl_timeTo("2026-03-17 00-01-01")) { ?>
                                            <li><input type="radio" value="-230000" rel="WaribikiA"
                                                       name="smallWaribikiA" id="smallWaribikiA1"> <label
                                                        for="smallWaribikiA1">超早割　230,000円OFF</label></li>
                                        <?php } elseif (ytl_timeTo("2026-04-01 00-01-01")) { ?>
                                            <li><input type="radio" value="-210000" rel="WaribikiA"
                                                       name="smallWaribikiA" id="smallWaribikiA2"> <label
                                                        for="smallWaribikiA2">早割　210,000円OFF</label></li>
                                        <?php } ?>
                                        <li><input type="radio" value="0" rel="WaribikiA" name="smallWaribikiA"
                                                   id="smallWaribikiA4"> <label for="smallWaribikiA4">該当なし</label>
                                        </li>
                                    </ul>
                                </div>
                            <?php } ?>


                            <div class="step hayawari">
                                <div class="stepTitle">割引（リトライ・のりかえ）</div>
                                <ul class="radioWrapper">
                                    <li><input type="radio" value="-170000" rel="waribikiB" name="smallWaribikiB"
                                               id="smallWaribikiB1"> <label
                                                for="smallWaribikiB1">リトライ割　170,000円OFF</label><br/><span
                                                class="small">昨年度、薬ゼミに最終日まで在籍された方（短期コースを除く）</span>
                                    </li>
                                    <li><input type="radio" value="-170000" rel="waribikiB" name="smallWaribikiB"
                                               id="smallWaribikiB2"> <label
                                                for="smallWaribikiB2">のりかえ割　170,000円OFF</label><br/><span
                                                class="small">昨年度、他の予備校の全日制コースに在籍された方</span></li>
                                    <li><input type="radio" value="0" rel="waribikiB" name="smallWaribikiB"
                                               id="smallWaribikiB4"> <label for="smallWaribikiB4">該当なし</label></li>
                                </ul>
                            </div>

                            <div class="step hayawari">
                                <div class="stepTitle">グループ割</div>
                                <ul class="radioWrapper">
                                    <li>
                                        <input type="checkbox" value="-10000" rel="waribikiC" name="smallWaribikiB"
                                               id="smallWaribikiC1"> <label
                                                for="smallWaribikiC1">グループ割　10,000円OFF</label><br/><span
                                                class="small">事前にご登録の上、代表者申込日の翌々日までに3～10名でお申込みの方</span>
                                        <br/><span class="small"><a href="https://www.yakuzemi.ac.jp/loan"
                                                                    target="_blank">※詳しくはこちら</a></span>
                                    </li>
                                </ul>
                            </div>

                            <div class="step stepCacheback">
                                <div class="stepTitle">入校後キャッシュバック</div>
                                <div class="stepTitleAddition">各種キャッシュバックは併用できます</div>
                                <ul class="radioWrapper">
                                    <li>
                                        <input type="checkbox" value="30000" rel="cb" name="smallCB" id="smallCB2">
                                        <label for="smallCB2">ナジック割・共立メンテナンス割　30,000円キャッシュバック</label><br/>
                                        <span class="small">ナジック・共立メンテナンスの指定物件に不動産契約された方</span><br/>
                                        <span class="small"><a href="https://www.yakuzemi.ac.jp/acomo/#ichioshi"
                                                               target="_blank">※詳しくはこちら</a></span>
                                    </li>
                                    <li>
                                        <input type="checkbox" value="10000" rel="cb" name="smallCB" id="smallCB3">
                                        <label for="smallCB3">入校特典　10,000円キャッシュバック</label><br/>
                                        <span class="small"><a
                                                    href="https://www.yakuzemi.ac.jp/information/2026setsumeikai/"
                                                    target="_blank">2026年度の薬ゼミ教室説明会</a>に、一度でも参加された方</span><br/>
                                    </li>
                                </ul>
                            </div>


                            <div class="submit">受講料を確認する</div>
                        </div>


                        <div class="resultContainer">
                            <table class="result">
                                <tr>
                                    <th>受講料</th>
                                    <td class="courseFeeAmount">-</td>
                                </tr>
                                <tr class="waribiki">
                                    <th>割引</th>
                                    <td class="waribikiTotalAmount">-</td>
                                </tr>
                                <tr class="shiharai">
                                    <th>お支払い総額</th>
                                    <td class="paymentAmount">-</td>
                                </tr>
                            </table>

                            <div class="cacheBack">
                                <div class="heading">後日キャッシュバック</div>
                                <div class="result cacheBackAmount">
                                    -
                                </div>
                            </div>


                            <div class="final">
                                <div class="heading">キャッシュバック後総額</div>
                                <div class="result finalAmount">
                                    -
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="course" id="simulatorOnline">
                        <div class="courseHead">オンデマンドコース</div>

                        <div class="conditions">
                            <div class="heading">条件設定</div>
                            <div class="step">
                                <div class="stepTitle">コース</div>
                                <table>
                                    <tr>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" value="850000" rel="courseFee"
                                                           name="onlineCourseFee" id="onlineCourse1">
                                                    <label for="onlineCourse1">オンデMaxコース(4月1日開始)</label>
                                                </li>
                                            </ul>
                                            <div>
                                                3/16までのお申込みで
                                                <br/>・青本一式プレゼント
                                                <br/>・個別指導1回無料
                                                <br/>・個別指導20％オフクーポン
                                                <br/>
                                                <br/>4/16までのお申込みで
                                                <br/>・青本一式プレゼント
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" value="690000" rel="courseFee"
                                                           name="onlineCourseFee" id="onlineCourse2">
                                                    <label for="onlineCourse2">じっくり青本1年コース(5月1日開始)</label>
                                                </li>
                                            </ul>
                                            <div>
                                                4/16までのお申込みで
                                                <br/>・青本一式プレゼント
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" value="590000" rel="courseFee"
                                                           name="onlineCourseFee" id="onlineCourse3">
                                                    <label for="onlineCourse3">ぎゅっと要点1年コース(5月1日開始)</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" value="450000" rel="courseFee"
                                                           name="onlineCourseFee" id="onlineCourse4">
                                                    <label for="onlineCourse4">ぎゅぎゅっと要点半年コース(9月1日開始)</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="step stepCacheback">
                                <div class="stepTitle">入校後キャッシュバック</div>
                                <div class="stepTitleAddition">各種キャッシュバックは併用できます</div>
                                <ul class="radioWrapper">
                                    <li>
                                        <input type="checkbox" value="30000" rel="cb" name="onlineCB" id="onlineCB2">
                                        <label for="onlineCB2">ナジック割・共立メンテナンス割　30,000円キャッシュバック</label><br/>
                                        <span class="small">ナジック・共立メンテナンスの指定物件に不動産契約された方</span><br/>
                                        <span class="small"><a href="https://www.yakuzemi.ac.jp/acomo/#ichioshi"
                                                               target="_blank">※詳しくはこちら</a></span>
                                    </li>
                                    <li>
                                        <input type="checkbox" value="10000" rel="cb" name="onlineCB" id="onlineCB3">
                                        <label for="onlineCB3">入校特典　10,000円キャッシュバック</label><br/>
                                        <span class="small"><a
                                                    href="https://www.yakuzemi.ac.jp/information/2026setsumeikai/"
                                                    target="_blank">2026年度の薬ゼミ教室説明会</a>に、一度でも参加された方</span><br/>
                                    </li>
                                </ul>
                            </div>


                            <div class="submit">受講料を確認する</div>
                        </div>


                        <div class="resultContainer">
                            <table class="result">
                                <tr>
                                    <th>受講料</th>
                                    <td class="courseFeeAmount">-</td>
                                </tr>
                                <tr>
                                    <th>青本代</th>
                                    <td>
                                        <div class="aohondai"><span>0</span>円</div>
                                        <span class="small">2割引後、送料を加算済<br/>(マイページのメニュー「講習会・説明会申込」ページから購入いただくと2割引価格になります※区分：その他で検索)</span>
                                    </td>
                                </tr>
                                <tr class="shiharai">
                                    <th>お支払い総額</th>
                                    <td class="paymentAmount">-</td>
                                </tr>
                            </table>

                            <div class="cacheBack">
                                <div class="heading">後日キャッシュバック</div>
                                <div class="result cacheBackAmount">
                                    -
                                </div>
                            </div>


                            <div class="final">
                                <div class="heading">キャッシュバック後総額</div>
                                <div class="result finalAmount">
                                    -
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="linkWrap">
                        <button class="submit" onclick="location.href='https://student.yakuzemi.ac.jp/'">
                            お申し込みはこちらから
                        </button>
                    </div>
                </div>


                <script src="<?php echo $sm_themeurl; ?>js/simulator2026.js"></script>

                <!------------------------------------------------------------------>


            </article>

        </div><!-- left-contents -->

        <?php if (is_page(array('classroom-and-instructors', 'kawagoe_dorm', 'classroom-maps', 'remedial-support'))) : ?>
            <?php get_template_part('include/side_classroom'); ?>
        <?php else: ?>
            <?php get_sidebar(); ?>
        <?php endif; ?>

    </div><!-- page-contents -->

    <script src="<?php echo WWP_THEME_URI; ?>/wlc/js/rwdImageMaps2.js"></script>
    <script>
        $(function () {
            //$('img[usemap]').rwdImageMaps();
            imageMapConv($('img[usemap]'));
            //$(window).resize(function(){imageMapConv($('img[usemap]'));console.log("a");});
            setInterval(function () {
                imageMapConv($('img[usemap]'));
            }, 1000);
        });
    </script>

<?php get_footer(); ?>