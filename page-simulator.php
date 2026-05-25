<?php get_header(); ?>

    <div class="page-contents">

        <div class="left-contents">
            <?php get_template_part('include/breadcrumbs'); ?>
            <?php get_template_part('include/sns'); ?>


            <article class="post">


                <img src="/yz/wp-content/themes/yakuzemi/wlc/pages/supporters2020/supportersmap.png" usemap="#ImageMap"
                     alt="" width="951" height="1" style="display:none;"/>


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
                $sm_themeurl = get_stylesheet_directory_uri() . "/wlc/pages/simulator/";
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
                        <li><a href="javascript:simulator.swapCourse('Small');">少人数制コース（お茶の水・川越寮）</a>
                        </li>
                        <li><a href="javascript:simulator.swapCourse('Online');">オンライン教室（オンデマンド）</a></li>
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
                                        <th>5月</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" value="1170000" name="courseFee"
                                                           id="normalCourse5"> <label
                                                            for="normalCourse5">通学コース</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="1070000" name="courseFee"
                                                           id="liveCourse5"> <label
                                                            for="liveCourse5">ライブ配信コース</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>9月</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" value="970000" name="courseFee"
                                                           id="normalCourse9"> <label
                                                            for="normalCourse9">通学コース</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="930000" name="courseFee"
                                                           id="liveCourse9"> <label
                                                            for="liveCourse9">ライブ配信コース</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="step hayawari">
                                <div class="stepTitle">割引（リトライ・のりかえ）</div>
                                <ul class="radioWrapper">
                                    <li><input type="radio" value="-60000" name="waribikiB" id="normalWaribikiB1">
                                        <label for="normalWaribikiB1">リトライ割　60,000円OFF</label><br/><span
                                                class="small">昨年度、薬ゼミに最終日まで在籍された方</span></li>
                                    <li><input type="radio" value="-60000" name="waribikiB" id="normalWaribikiB2">
                                        <label for="normalWaribikiB2">のりかえ割　60,000円OFF</label><br/><span
                                                class="small">昨年度、他の予備校の全日制コースに在籍された方</span></li>
                                    <li><input type="radio" value="0" name="waribikiB" id="normalWaribikiB3"> <label
                                                for="normalWaribikiB3">該当なし</label></li>
                                </ul>
                            </div>
                            <div class="step stepCacheback">
                                <div class="stepTitle">入校後キャッシュバック</div>
                                <ul class="radioWrapper">
                                    <li>
                                        <input type="checkbox" value="30000" name="cb" id="normalCB1"> <label
                                                for="normalCB1">グループ割　30,000円キャッシュバック</label><br/>
                                        <span class="small">3～10名のグループで同日申し込み後、マイページ「グループ割申請」から手続きされた方</span><br/>
                                        <span class="small"><a
                                                    href="https://www.yakuzemi.ac.jp/information/information-19515/#group"
                                                    target="_blank">※詳しくはこちら</a></span>
                                    </li>
                                    <li>
                                        <input type="checkbox" value="30000" name="cb" id="normalCB2"> <label
                                                for="normalCB2">ナジック割・共立メンテナンス割　30,000円キャッシュバック</label><br/>
                                        <span class="small">ナジック・共立メンテナンスの指定物件に新規不動産契約された方</span><br/>
                                        <span class="small"><a href="https://www.yakuzemi.ac.jp/acomo/#ichioshi"
                                                               target="_blank">※詳しくはこちら</a></span>
                                    </li>
                                    <li>
                                        <input type="checkbox" value="30000" name="cb" id="normalCB3"> <label
                                                for="normalCB3">入校特典　30,000円キャッシュバック</label><br/>
                                        <span class="small"><a href="https://www.yakuzemi.ac.jp/information/2022school/"
                                                               target="_blank">2022年度の薬ゼミ教室説明会</a>に一度でも参加された方　かつ　コース入校日から1ヶ月以内に2023年版青本セットを購入（所持）される方</span><br/>
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
                                        <div class="aohondai">36,080円</div>
                                        <span class="small">2割引後、送料を加算済<br/>(4月5日以降にマイページのメニュー画面「購買」から購入いただくと2割引価格になります)</span>
                                    </td>
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
                        <div class="courseHead">少人数制コース（お茶の水・川越寮）</div>

                        <div class="conditions">
                            <div class="heading">条件設定</div>
                            <div class="step">
                                <div class="stepTitle">コース</div>
                                <table>
                                    <tr>
                                        <th>お茶の水</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" value="2220000" name="courseFee"
                                                           id="smallCourse5"> <label
                                                            for="smallCourse5">お茶の水少人数制5月コース</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>川越</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" value="3100000" name="courseFee"
                                                           id="smallCourse9"> <label
                                                            for="smallCourse9">川越少人数制寮生5月コース</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="step hayawari">
                                <div class="stepTitle">割引（リトライ・のりかえ）</div>
                                <ul class="radioWrapper">
                                    <li><input type="radio" value="-150000" name="waribikiB" id="smallWaribikiB1">
                                        <label for="smallWaribikiB1">リトライ割　150,000円OFF</label><br/><span
                                                class="small">昨年度、薬ゼミに最終日まで在籍された方</span></li>
                                    <li><input type="radio" value="-150000" name="waribikiB" id="smallWaribikiB2">
                                        <label for="smallWaribikiB2">のりかえ割　150,000円OFF</label><br/><span
                                                class="small">昨年度、他の予備校の全日制コースに在籍された方</span></li>
                                    <li><input type="radio" value="0" name="waribikiB" id="smallWaribikiB3"> <label
                                                for="smallWaribikiB3">該当なし</label></li>
                                </ul>
                            </div>
                            <div class="step stepCacheback">
                                <div class="stepTitle">入校後キャッシュバック</div>
                                <ul class="radioWrapper">
                                    <li>
                                        <input type="checkbox" value="30000" name="cb" id="smallCB1"> <label
                                                for="smallCB1">グループ割　30,000円キャッシュバック</label><br/>
                                        <span class="small">3～10名のグループで同日申し込み後、マイページ「グループ割申請」から手続きされた方</span><br/>
                                        <span class="small"><a
                                                    href="https://www.yakuzemi.ac.jp/information/information-19515/#group"
                                                    target="_blank">※詳しくはこちら</a></span>
                                    </li>
                                    <li>
                                        <input type="checkbox" value="30000" name="cb" id="smallCB2"> <label
                                                for="smallCB2">ナジック割・共立メンテナンス割　30,000円キャッシュバック</label><br/>
                                        <span class="small">ナジック・共立メンテナンスの指定物件に新規不動産契約された方</span><br/>
                                        <span class="small"><a href="https://www.yakuzemi.ac.jp/acomo/#ichioshi"
                                                               target="_blank">※詳しくはこちら</a></span>
                                    </li>
                                    <li>
                                        <input type="checkbox" value="30000" name="cb" id="smallCB3"> <label
                                                for="smallCB3">入校特典　30,000円キャッシュバック</label><br/>
                                        <span class="small"><a href="https://www.yakuzemi.ac.jp/information/2022school/"
                                                               target="_blank">2022年度の薬ゼミ教室説明会</a>に一度でも参加された方</span><br/>
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
                        <div class="courseHead">オンライン教室（オンデマンド）</div>

                        <div class="conditions">
                            <div class="heading">条件設定</div>
                            <div class="step">
                                <div class="stepTitle">コース</div>

                                <ul>
                                    <li>
                                        <input type="radio" value="650000" name="courseFee" id="onlineCourse4"> <label
                                                for="onlineCourse4">4月コース</label>
                                    </li>
                                    <li>
                                        <input type="radio" value="550000" name="courseFee" id="onlineCourse6"> <label
                                                for="onlineCourse6">6月コース</label>
                                    </li>
                                    <li>
                                        <input type="radio" value="450000" name="courseFee" id="onlineCourse9"> <label
                                                for="onlineCourse9">9月コース</label>
                                    </li>
                                </ul>

                            </div>

                            <div class="step stepCacheback">
                                <div class="stepTitle">入校後キャッシュバック</div>
                                <ul class="radioWrapper">
                                    <li>
                                        <input type="checkbox" value="30000" name="cb" id="onlineCB2"> <label
                                                for="onlineCB2">ナジック割・共立メンテナンス割　30,000円キャッシュバック</label><br/>
                                        <span class="small">ナジック・共立メンテナンスの指定物件に新規不動産契約された方</span><br/>
                                        <span class="small"><a href="https://www.yakuzemi.ac.jp/acomo/#ichioshi"
                                                               target="_blank">※詳しくはこちら</a></span>
                                    </li>
                                    <li>
                                        <input type="checkbox" value="30000" name="cb" id="onlineCB3"> <label
                                                for="onlineCB3">入校特典　30,000円キャッシュバック</label><br/>
                                        <span class="small"><a href="https://www.yakuzemi.ac.jp/information/2022school/"
                                                               target="_blank">2022年度の薬ゼミ教室説明会</a>に一度でも参加された方　かつ　コース入校日から1ヶ月以内に2023年版青本セットを購入（所持）される方</span><br/>
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
                                        <div class="aohondai">36,080円</div>
                                        <span class="small">2割引後、送料を加算済<br/>(4月5日以降にマイページのメニュー画面「購買」から購入いただくと2割引価格になります)</span>
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
                        <button class="submit" onclick="location.href='https://www.mypage.yakuzemi.ac.jp/login/'">
                            お申し込みはこちらから
                        </button>
                    </div>
                </div>


                <script src="<?php echo $sm_themeurl; ?>js/simulator.js"></script>

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