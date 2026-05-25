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
                //$sm_themeurl="";
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
                                                    <input type="radio" value="1200000" rel="courseFee"
                                                           name="normalCourseFee" id="normalCourse5"> <label
                                                            for="normalCourse5">通学コース</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="1100000" rel="courseFee"
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
                                                    <input type="radio" value="990000" rel="courseFee"
                                                           name="normalCourseFee" id="normalCourse9"> <label
                                                            for="normalCourse9">通学コース</label>
                                                </li>
                                                <li>
                                                    <input type="radio" value="950000" rel="courseFee"
                                                           name="normalCourseFee" id="liveCourse9"> <label
                                                            for="liveCourse9">ライブ配信コース</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </div>


                            <?php if (ytl_timeTo("2023-04-05 00-01-01")) { ?>
                                <div class="step hayawari">
                                    <div class="stepTitle">割引（早割）</div>
                                    <ul class="radioWrapper">
                                        <?php if (ytl_timeTo("2023-03-14 00-01-01")) { ?>
                                            <li><input type="radio" value="-150000" rel="waribikiA"
                                                       name="nomalWaribikiA" id="normalWaribikiA1"> <label
                                                        for="normalWaribikiA1">超早割（2/19～3/13）　150,000円OFF</label>
                                            </li>
                                            <li><input type="radio" value="-130000" rel="waribikiA"
                                                       name="nomalWaribikiA" id="normalWaribikiA2"> <label
                                                        for="normalWaribikiA2">早割（3/14～3/26）　130,000円OFF</label></li>
                                        <?php } elseif (ytl_timeTo("2023-03-27 00-01-01")) { ?>
                                            <li><input type="radio" value="-130000" rel="waribikiA"
                                                       name="nomalWaribikiA" id="normalWaribikiA4"> <label
                                                        for="normalWaribikiA4">早割（3/14～3/26）　130,000円OFF</label></li>
                                        <?php } else { ?>
                                            <li><input type="radio" value="-100000" rel="waribikiA"
                                                       name="nomalWaribikiA" id="normalWaribikiA5"> <label
                                                        for="normalWaribikiA5">今だけ割（3/27～4/4）　100,000円OFF</label>
                                            </li>
                                        <?php } ?>
                                        <li><input type="radio" value="0" rel="waribikiA" name="nomalWaribikiA"
                                                   id="normalWaribikiA3"> <label for="normalWaribikiA3">該当なし</label>
                                        </li>
                                    </ul>
                                </div>
                            <?php } ?>


                            <div class="step hayawari">
                                <div class="stepTitle">割引（リトライ・のりかえ）</div>
                                <ul class="radioWrapper">
                                    <li><input type="radio" value="-60000" rel="waribikiB" name="nomalWaribikiB"
                                               id="normalWaribikiB1"> <label
                                                for="normalWaribikiB1">リトライ割　60,000円OFF</label><br/><span
                                                class="small">昨年度、薬ゼミに最終日まで在籍された方 (短期コースを除く)</span>
                                    </li>
                                    <li><input type="radio" value="-60000" rel="waribikiB" name="nomalWaribikiB"
                                               id="normalWaribikiB2"> <label
                                                for="normalWaribikiB2">のりかえ割　60,000円OFF</label><br/><span
                                                class="small">昨年度、他の予備校の全日制コースに在籍されていた方</span>
                                    </li>
                                    <li><input type="radio" value="0" rel="waribikiB" name="nomalWaribikiB"
                                               id="normalWaribikiB3"> <label for="normalWaribikiB3">該当なし</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="step stepCacheback">
                                <div class="stepTitle">入校後キャッシュバック</div>
                                <div class="stepTitleAddition">各種キャッシュバックは併用できます</div>
                                <ul class="radioWrapper">
                                    <li>
                                        <input type="checkbox" value="30000" rel="cb" name="normalCB" id="normalCB1">
                                        <label for="normalCB1">グループ割　30,000円キャッシュバック</label><br/>
                                        <span class="small">事前にご登録の上、同日を含む前後3日以内に3～10名でお申込みの方</span><br/>
                                        <span class="small"><a
                                                    href="https://www.yakuzemi.ac.jp/information/2023order/#group"
                                                    target="_blank">※詳しくはこちら</a></span>
                                    </li>
                                    <li>
                                        <input type="checkbox" value="30000" rel="cb" name="normalCB" id="normalCB2">
                                        <label for="normalCB2">ナジック割・共立メンテナンス割　30,000円キャッシュバック</label><br/>
                                        <span class="small">ナジック・共立メンテナンスの指定物件に新規不動産契約された方</span><br/>
                                        <span class="small"><a href="https://www.yakuzemi.ac.jp/acomo/#ichioshi"
                                                               target="_blank">※詳しくはこちら</a></span>
                                    </li>
                                    <li>
                                        <input type="checkbox" value="20000" rel="cb" name="normalCB" id="normalCB3">
                                        <label for="normalCB3">入校特典　20,000円キャッシュバック</label><br/>
                                        <span class="small"><a href="https://www.yakuzemi.ac.jp/information/2023school/"
                                                               target="_blank">2023年度の教室説明会</a>に参加された方</span><br/>
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
                                                    <input type="radio" value="2220000" rel="courseFee"
                                                           name="smallCourseFee" id="smallCourse5"> <label
                                                            for="smallCourse5">お茶の水少人数制1年コース</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>川越</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" value="3100000" rel="courseFee"
                                                           name="smallCourseFee" id="smallCourse9"> <label
                                                            for="smallCourse9">川越少人数制寮生1年コース</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </div>


                            <?php if (ytl_timeTo("2023-04-05 00-01-01")) { ?>
                                <div class="step hayawari">
                                    <div class="stepTitle">割引（早割）</div>
                                    <ul class="radioWrapper">
                                        <?php if (ytl_timeTo("2023-03-14 00-01-01")) { ?>
                                            <li><input type="radio" value="-150000" rel="waribikiA"
                                                       name="smallWaribikiA" id="smallWaribikiA1"> <label
                                                        for="smallWaribikiA1">超早割（2/19～3/13）　150,000円OFF</label>
                                            </li>
                                            <li><input type="radio" value="-130000" rel="waribikiA"
                                                       name="smallWaribikiA" id="smallWaribikiA2"> <label
                                                        for="smallWaribikiA2">早割（3/14～3/26）　130,000円OFF</label></li>
                                        <?php } elseif (ytl_timeTo("2023-03-27 00-01-01")) { ?>
                                            <li><input type="radio" value="-130000" rel="waribikiA"
                                                       name="smallWaribikiA" id="smallWaribikiA4"> <label
                                                        for="smallWaribikiA4">早割（3/14～3/26）　130,000円OFF</label></li>
                                        <?php } else { ?>
                                            <li><input type="radio" value="-100000" rel="waribikiA"
                                                       name="smallWaribikiA" id="smallWaribikiA5"> <label
                                                        for="smallWaribikiA5">今だけ割（3/27～4/4）　100,000円OFF</label>
                                            </li>
                                        <?php } ?>
                                        <li><input type="radio" value="0" rel="waribikiA" name="smallWaribikiA"
                                                   id="smallWaribikiA3"> <label for="smallWaribikiA3">該当なし</label>
                                        </li>
                                    </ul>
                                </div>
                            <?php } ?>


                            <div class="step hayawari">
                                <div class="stepTitle">割引（リトライ・のりかえ）</div>
                                <ul class="radioWrapper">
                                    <li><input type="radio" value="-150000" rel="waribikiB" name="smallWaribikiB"
                                               id="smallWaribikiB1"> <label
                                                for="smallWaribikiB1">リトライ割　150,000円OFF</label><br/><span
                                                class="small">昨年度、薬ゼミに最終日まで在籍された方 (短期コースを除く)</span>
                                    </li>
                                    <li><input type="radio" value="-150000" rel="waribikiB" name="smallWaribikiB"
                                               id="smallWaribikiB2"> <label
                                                for="smallWaribikiB2">のりかえ割　150,000円OFF</label><br/><span
                                                class="small">昨年度、他の予備校の全日制コースに在籍されていた方</span>
                                    </li>
                                    <li><input type="radio" value="0" rel="waribikiB" name="smallWaribikiB"
                                               id="smallWaribikiB3"> <label for="smallWaribikiB3">該当なし</label></li>
                                </ul>
                            </div>
                            <div class="step stepCacheback">
                                <div class="stepTitle">入校後キャッシュバック</div>
                                <div class="stepTitleAddition">各種キャッシュバックは併用できます</div>
                                <ul class="radioWrapper">
                                    <li>
                                        <input type="checkbox" value="30000" rel="cb" name="smallCB" id="smallCB1">
                                        <label for="smallCB1">グループ割　30,000円キャッシュバック</label><br/>
                                        <span class="small">事前にご登録の上、同日を含む前後3日以内に3～10名でお申込みの方</span><br/>
                                        <span class="small"><a
                                                    href="https://www.yakuzemi.ac.jp/information/2023order/#group"
                                                    target="_blank">※詳しくはこちら</a></span>
                                    </li>
                                    <li>
                                        <input type="checkbox" value="30000" rel="cb" name="smallCB" id="smallCB2">
                                        <label for="smallCB2">ナジック割・共立メンテナンス割　30,000円キャッシュバック</label><br/>
                                        <span class="small">ナジック・共立メンテナンスの指定物件に新規不動産契約された方</span><br/>
                                        <span class="small"><a href="https://www.yakuzemi.ac.jp/acomo/#ichioshi"
                                                               target="_blank">※詳しくはこちら</a></span>
                                    </li>
                                    <li>
                                        <input type="checkbox" value="20000" rel="cb" name="smallCB" id="smallCB3">
                                        <label for="smallCB3">入校特典　20,000円キャッシュバック</label><br/>
                                        <span class="small"><a href="https://www.yakuzemi.ac.jp/information/2023school/"
                                                               target="_blank">2023年度の教室説明会</a>に参加された方</span><br/>
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

                                <ul>
                                    <li>
                                        <input type="radio" value="680000" rel="courseFee" name="onlineCourseFee"
                                               id="onlineCourse3"> <label for="onlineCourse3">3月コース</label>
                                    </li>
                                    <li>
                                        <input type="radio" value="580000" rel="courseFee" name="onlineCourseFee"
                                               id="onlineCourse5"> <label for="onlineCourse5">5月コース</label>
                                    </li>
                                    <li>
                                        <input type="radio" value="450000" rel="courseFee" name="onlineCourseFee"
                                               id="onlineCourse9"> <label for="onlineCourse9">9月コース</label>
                                    </li>
                                </ul>

                            </div>

                            <div class="step stepCacheback">
                                <div class="stepTitle">入校後キャッシュバック</div>
                                <div class="stepTitleAddition">各種キャッシュバックは併用できます</div>
                                <ul class="radioWrapper">
                                    <li>
                                        <input type="checkbox" value="30000" rel="cb" name="onlineCB" id="onlineCB2">
                                        <label for="onlineCB2">ナジック割・共立メンテナンス割　30,000円キャッシュバック</label><br/>
                                        <span class="small">ナジック・共立メンテナンスの指定物件に新規不動産契約された方</span><br/>
                                        <span class="small"><a href="https://www.yakuzemi.ac.jp/acomo/#ichioshi"
                                                               target="_blank">※詳しくはこちら</a></span>
                                    </li>
                                    <li>
                                        <input type="checkbox" value="20000" rel="cb" name="onlineCB" id="onlineCB3">
                                        <label for="onlineCB3">入校特典　20,000円キャッシュバック</label><br/>
                                        <span class="small"><a href="https://www.yakuzemi.ac.jp/information/2023school/"
                                                               target="_blank">2023年度の教室説明会</a>に参加された方　かつ　コース入校日から1ヶ月以内に第109回対策青本セットを購入（所持）される方</span><br/>
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


                <script src="<?php echo $sm_themeurl; ?>js/simulator2023.js"></script>

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