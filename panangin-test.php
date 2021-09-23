<?php 

/**
 * Template name: Страница с тестом
 */

get_header();  ?>

<div class="test-home container" style="margin-bottom: 200px">

    <div class="steps">
        <div id="step1" class="step_active">
            <div class="linesteps">
                <div class="pic">1</div>
            </div>
            <div class="questtxt">Вредные блюда самые вкусные. Поэтому я регулярно
                ем и жирное, и жареное. За день я съедаю до 60 г
                различных жиров и более 100 г мяса и колбасы</div>
            <div class="ansver" id="ansver1">
                <div onclick="test_step(1,0)" id="ansver10"><i class="fa fa-circle-o"></i>Нет, ни в коем случае </div>
                <div onclick="test_step(1,3)" id="ansver13"><i class="fa fa-circle-o"></i>Да, но лишь иногда </div>
                <div onclick="test_step(1,6)" id="ansver16"><i class="fa fa-circle-o"></i>Не вижу смысла себя
                    ограничивать и съедаю даже больше</div>
            </div>
            <div class="nextblock" onclick="gotostep('2')">Далее</div>
            <div class="clearfix"></div>
        </div>

        <div id="step2">
            <div class="linesteps">
                <div class="pic">2</div>
            </div>
            <div class="questtxt">Мой вес превышает норму более чем на 5 кг</div>
            <div class="ansver" id="ansver2">
                <div onclick="test_step(2,0)" id="ansver20"><i class="fa fa-circle-o"></i>Конечно же, нет</div>
                <div onclick="test_step(2,3)" id="ansver23"><i class="fa fa-circle-o"></i>Да, но не больше 15 кг</div>
                <div onclick="test_step(2,6)" id="ansver26"><i class="fa fa-circle-o"></i>Мой вес превышает норму более
                    чем на 15 кг, и с этим
                    ничего не поделать</div>
            </div>
            <div class="nextblock" onclick="gotostep('3')">Далее</div>
            <div class="clearfix"></div>
        </div>

        <div id="step3">
            <div class="linesteps">
                <div class="pic">3</div>
            </div>
            <div class="questtxt">Я считаю, что курить — это нормально</div>
            <div class="ansver" id="ansver3">
                <div onclick="test_step(3,0)" id="ansver30"><i class="fa fa-circle-o"></i>Нет, не курю уже больше года
                </div>
                <div onclick="test_step(3,8)" id="ansver38"><i class="fa fa-circle-o"></i>Да, но не более 10 сигарет
                    ежедневно</div>
                <div onclick="test_step(3,11)" id="ansver311"><i class="fa fa-circle-o"></i>Да, но не более двадцати
                    сигарет в день</div>
                <div onclick="test_step(3,14)" id="ansver314"><i class="fa fa-circle-o"></i>Да, больше двадцати</div>
            </div>
            <div class="nextblock" onclick="gotostep('4')">Далее</div>
            <div class="clearfix"></div>
        </div>

        <div id="step4">
            <div class="linesteps">
                <div class="pic">4</div>
            </div>
            <div class="questtxt">За день я выпиваю больше двух кружек пива (бокалов вина, рюмок водки)</div>
            <div class="ansver" id="ansver4">
                <div onclick="test_step(4,0)" id="ansver40"><i class="fa fa-circle-o"></i>Нет, за редким исключением
                </div>
                <div onclick="test_step(4,2)" id="ansver42"><i class="fa fa-circle-o"></i>Да, такое происходит довольно
                    часто</div>
                <div onclick="test_step(4,4)" id="ansver44"><i class="fa fa-circle-o"></i>Да, я почти ежедневно выпиваю
                    даже больше</div>
            </div>
            <div class="nextblock" onclick="gotostep('5')">Далее</div>
            <div class="clearfix"></div>
        </div>


        <div id="step5">
            <div class="linesteps">
                <div class="pic">2</div>
            </div>
            <div class="questtxt">Я ужасно устаю от перегрузок на работе и дома. Порой почти дохожу до нервного срыва.
            </div>
            <div class="ansver" id="ansver5">
                <div onclick="test_step(5,0)" id="ansver50"><i class="fa fa-circle-o"></i>Нет, такое случается крайне
                    редко</div>
                <div onclick="test_step(5,2)" id="ansver52"><i class="fa fa-circle-o"></i>Да, время от времени такое
                    бывает</div>
                <div onclick="test_step(5,4)" id="ansver54"><i class="fa fa-circle-o"></i>Да, я просто живу в состоянии
                    перегрузок, и ничего не могу изменить</div>
            </div>
            <div class="nextblock" onclick="gotostep('6')">Далее</div>
            <div class="clearfix"></div>
        </div>

        <div id="step6">
            <div class="linesteps">
                <div class="pic">6</div>
            </div>
            <div class="questtxt">Я постоянно тревожусь о завтрашнем дне, боюсь неприятностей, которые он может
                принести.</div>
            <div class="ansver" id="ansver6">
                <div onclick="test_step(6,0)" id="ansver60"><i class="fa fa-circle-o"></i>Нет, я вполне уравновешен
                </div>
                <div onclick="test_step(6,2)" id="ansver62"><i class="fa fa-circle-o"></i>Не всегда, но довольно часто
                </div>
                <div onclick="test_step(6,4)" id="ansver64"><i class="fa fa-circle-o"></i>Да, я уже давно испытываю
                    душевные муки</div>
            </div>
            <div class="nextblock" onclick="gotostep('7')">Далее</div>
            <div class="clearfix"></div>
        </div>


        <div id="step7">
            <div class="linesteps">
                <div class="pic">7</div>
            </div>
            <div class="questtxt">У моих родных артериальное давление повышено</div>
            <div class="ansver" id="ansver7">
                <div onclick="test_step(7,0)" id="ansver70"><i class="fa fa-circle-o"></i>Нет, во всяком случае, я об
                    этом не знаю</div>
                <div onclick="test_step(7,2)" id="ansver72"><i class="fa fa-circle-o"></i>Да, этим страдал один из
                    родителей</div>
                <div onclick="test_step(7,4)" id="ansver74"><i class="fa fa-circle-o"></i>Да, у обоих родителей и (или)
                    у братьев и сестер</div>
            </div>
            <div class="nextblock" onclick="gotostep('8')">Далее</div>
            <div class="clearfix"></div>
        </div>

        <div id="step8">
            <div class="linesteps">
                <div class="pic">8</div>
            </div>
            <div class="questtxt">У меня частенько болит голова, порой она словно свинцом налита.</div>
            <div class="ansver" id="ansver8">
                <div onclick="test_step(8,0)" id="ansver80"><i class="fa fa-circle-o"></i>Нет, этого почти не случается
                </div>
                <div onclick="test_step(8,2)" id="ansver82"><i class="fa fa-circle-o"></i>Нечасто, хотя и чаще, чем
                    раньше</div>
                <div onclick="test_step(8,4)" id="ansver84"><i class="fa fa-circle-o"></i>Да, часто</div>
            </div>
            <div class="nextblock" onclick="gotostep('9')">Далее</div>
            <div class="clearfix"></div>
        </div>
        <div id="step9">
            <div class="linesteps">
                <div class="pic">9</div>
            </div>
            <div class="questtxt">Здоровый сон для меня — несбыточная мечта.</div>
            <div class="ansver" id="ansver9">
                <div onclick="test_step(9,0)" id="ansver90"><i class="fa fa-circle-o"></i>Нет, я хорошо сплю</div>
                <div onclick="test_step(9,2)" id="ansver92"><i class="fa fa-circle-o"></i>По-разному: иногда сразу
                    засыпаю, иногда мучаюсь</div>
                <div onclick="test_step(9,4)" id="ansver94"><i class="fa fa-circle-o"></i>Я плохо засыпаю и вынужден
                    принимать снотворное</div>
            </div>
            <div class="nextblock" onclick="gotostep('10')">Далее</div>
            <div class="clearfix"></div>
        </div>



        <div id="step10">
            <div class="linesteps">
                <div class="pic">10</div>
            </div>
            <div class="questtxt">Даже при небольших нагрузках и в состоянии покоя у меня
                случается сильное сердцебиение, порой с перебоями.</div>
            <div class="ansver" id="ansver100">
                <div onclick="test_step(10,0)" id="ansver1000"><i class="fa fa-circle-o"></i>Нет, у меня никогда не было
                    таких проблем</div>
                <div onclick="test_step(10,2)" id="ansver1002"><i class="fa fa-circle-o"></i>Да, у меня это случается,
                    но редко и не интенсивно</div>
                <div onclick="test_step(10,6)" id="ansver1006"><i class="fa fa-circle-o"></i>Да, все чаще и тревожнее
                </div>
            </div>
            <div class="nextblock" onclick="gotostep('11')">Далее</div>
            <div class="clearfix"></div>
        </div>


        <div id="step11">
            <div class="linesteps">
                <div class="pic">11</div>
            </div>
            <div class="questtxt">Я человек активный, даже неугомонный. Только и жду
                задач, требующих решения!</div>
            <div class="ansver" id="ansver11">
                <div onclick="test_step(11,0)" id="ansver110"><i class="fa fa-circle-o"></i>Нет, я себя не отношу к
                    таковым</div>
                <div onclick="test_step(11,2)" id="ansver112"><i class="fa fa-circle-o"></i>Да, я, скорее, заводной, чем
                    спокойный, но могу заставить себя и отключиться</div>
                <div onclick="test_step(11,4)" id="ansver114"><i class="fa fa-circle-o"></i>Да, я постоянно в заведенном
                    состоянии, часто до полного изнеможения</div>
            </div>
            <div class="nextblock" onclick="gotostep('12')">Далее</div>
            <div class="clearfix"></div>
        </div>


        <div id="step12">
            <h2>Результат</h2><br><br>
            <div id="otvet1" class="otvet">
                Если вы не приукрашиваете, для развития артериальной гипертензии нет особых причин. Однако помните о
                пользе зарядки
                и прогулок на свежем воздухе. Включите в рацион полезные продукты, богатые солями магния (овсяную крупу,
                шиповник, орехи,
                отруби) и калия (печеный картофель, изюм, курагу, чернослив,
                капусту, баклажаны, абрикосы). Не забудьте и о морепродуктах.
                А если вам более 40 лет, не реже двух раз в год следует проходить
                обследование
            </div>

            <div id="otvet2" class="otvet">Повысилось ли ваше кровяное давление или пока еще нет,
                у вас для этого уже больше, чем нужно, негативных причин. Постарайтесь устранить их: рационально
                питайтесь, следите
                за весом, снижайте потребление никотина и алкоголя. Ежедневно понуждайте себя хотя бы к малым физическим
                усилиям:
                поднимайтесь пешком по лестнице, занимайтесь гимнастикой.
                Попробуйте контролировать ваше давление до и после того, как
                выполните 10 приседаний. Дело в том, что кроме нормального
                и повышенного давления, существует промежуточное «лабильное» давление. Оно нормально в состоянии покоя и
                повышается
                при незначительной нагрузке. Лабильное кровяное давление —
                предвестник или первая ступень гипертонии.
            </div>
            <div id="otvet3" class="otvet">Вы принадлежите к типу людей, склонных к повышенному
                давлению. Только врач может констатировать, имеется ли у вас
                гипертония или вы лишь провоцируете ее появление дурными
                привычками. Откажитесь от сахара, сладостей, мучных блюд,
                кондитерских изделий, старайтесь меньше есть жирного, жареного, соленого. А вот овощей, притом в сыром
                виде, включайте
                в рацион как можно больше. И примите к сведению: теряя один
                килограмм своих жировых запасов, вы снижаете артериальное
                давление в среднем на один миллиметр ртутного столба
            </div>
            <div id="otvet4" class="otvet">
                Если вы ничего не преувеличили, вам серьезно угрожает
                гипертензия. Немедленно отправляйтесь к врачу. Не уклоняйтесь от этого решения. Вам нужно проверить
                сердце и почки.
                Боритесь с излишками веса, откажитесь от курения и алкоголя. И помните: чтобы жить долго и хорошо,
                необходимо
                заботиться о собственном здоровье.
            </div>
            <div class="nextblock"><a href="http://panangin.com.ua/heart-health/test/">В начало</a></div>
            <div class="clearfix"></div>

        </div>

        <input type="hidden" id="valstep1" value="" />
        <input type="hidden" id="valstep2" value="" />
        <input type="hidden" id="valstep3" value="" />
        <input type="hidden" id="valstep4" value="" />
        <input type="hidden" id="valstep5" value="" />
        <input type="hidden" id="valstep6" value="" />
        <input type="hidden" id="valstep7" value="" />
        <input type="hidden" id="valstep8" value="" />
        <input type="hidden" id="valstep9" value="" />
        <input type="hidden" id="valstep10" value="" />
        <input type="hidden" id="valstep11" value="" />


    </div>


</div>

<?php get_footer(); ?>

<script>
    function gotoclearstep() {
        jQuery('#valstep1').val('');
        jQuery('#valstep2').val('');
        jQuery('#valstep3').val('');
        jQuery('#valstep4').val('');
        jQuery('#valstep5').val('');
        jQuery('#valstep6').val('');
        jQuery('#valstep7').val('');
        jQuery('#valstep8').val('');
        jQuery('#valstep9').val('');
        jQuery('#valstep10').val('');
        jQuery('#valstep11').val('');
        jQuery('#step1').removeClass('step_active');
        jQuery('#step2').removeClass('step_active');
        jQuery('#step3').removeClass('step_active');
        jQuery('#step4').removeClass('step_active');
        jQuery('#step5').removeClass('step_active');
        jQuery('#step6').removeClass('step_active');
        jQuery('#step7').removeClass('step_active');
        jQuery('#step8').removeClass('step_active');
        jQuery('#step9').removeClass('step_active');
        jQuery('#step10').removeClass('step_active');
        jQuery('#step11').removeClass('step_active');
        jQuery('#step12').removeClass('step_active');
        jQuery('#step1').addClass('step_active');
        jQuery('#otvet1').css('display', 'none');
        jQuery('#otvet2').css('display', 'none');
        jQuery('#otvet3').css('display', 'none');
        jQuery('#otvet4').css('display', 'none');

        jQuery('#ansver1 .fa').removeClass('fa-check-circle-o');
        jQuery('#ansver1 .fa').addClass('fa-circle-o');
        jQuery('#ansver2 .fa').removeClass('fa-check-circle-o');
        jQuery('#ansver2 .fa').addClass('fa-circle-o');
        jQuery('#ansver3 .fa').removeClass('fa-check-circle-o');
        jQuery('#ansver3 .fa').addClass('fa-circle-o');
        jQuery('#ansver4 .fa').removeClass('fa-check-circle-o');
        jQuery('#ansver4 .fa').addClass('fa-circle-o');
        jQuery('#ansver5 .fa').removeClass('fa-check-circle-o');
        jQuery('#ansver5 .fa').addClass('fa-circle-o');
        jQuery('#ansver6 .fa').removeClass('fa-check-circle-o');
        jQuery('#ansver6 .fa').addClass('fa-circle-o');
        jQuery('#ansver7 .fa').removeClass('fa-check-circle-o');
        jQuery('#ansver7 .fa').addClass('fa-circle-o');
        jQuery('#ansver8 .fa').removeClass('fa-check-circle-o');
        jQuery('#ansver8 .fa').addClass('fa-circle-o');
        jQuery('#ansver9 .fa').removeClass('fa-check-circle-o');
        jQuery('#ansver9 .fa').addClass('fa-circle-o');
        jQuery('#ansver10 .fa').removeClass('fa-check-circle-o');
        jQuery('#ansver10 .fa').addClass('fa-circle-o');
        jQuery('#ansver11 .fa').removeClass('fa-check-circle-o');
        jQuery('#ansver11 .fa').addClass('fa-circle-o');
    }

    function gotostep(nomid) {

        var prevnomid = nomid - 1;
        if (prevnomid == 0) prevnomid = 1;
        var valstep = jQuery('#valstep' + prevnomid).val();
        if (valstep != '') {
            if (nomid == 12) {
                count = 0;
                count1 = parseInt(jQuery('#valstep1').val());
                count2 = parseInt(jQuery('#valstep2').val());
                count3 = parseInt(jQuery('#valstep3').val());
                count4 = parseInt(jQuery('#valstep4').val());
                count5 = parseInt(jQuery('#valstep5').val());
                count6 = parseInt(jQuery('#valstep6').val());
                count7 = parseInt(jQuery('#valstep7').val());
                count8 = parseInt(jQuery('#valstep8').val());
                count9 = parseInt(jQuery('#valstep9').val());
                count10 = parseInt(jQuery('#valstep10').val());
                count11 = parseInt(jQuery('#valstep11').val());
                count = count1 + count2 + count3 + count4 + count5 + count6 + count7 + count8 + count9 + count10 +
                    count11;
                if (count <= 10) jQuery('#otvet1').css('display', 'block');
                if (count >= 11 && count <= 20) jQuery('#otvet2').css('display', 'block');
                if (count >= 21 && count <= 30) jQuery('#otvet3').css('display', 'block');
                if (count >= 31) jQuery('#otvet4').css('display', 'block');
            }
            jQuery('#step' + prevnomid).removeClass('step_active');
            jQuery('#step' + nomid).addClass('step_active');
        }
    }


    function test_step(step, nomid) {
        stepid = step;
        if (step == 10) stepid = 100;
        jQuery('#ansver' + stepid + ' i').removeClass('fa-check-circle-o');
        jQuery('#ansver' + stepid + ' i').addClass('fa-circle-o');
        jQuery('#ansver' + stepid + nomid + ' i').removeClass('fa-circle-o');
        jQuery('#ansver' + stepid + nomid + ' i').addClass('fa-check-circle-o');
        jQuery('#valstep' + step).val(nomid);
    }
</script>


<style>
    .testnext {
        display: inline-block;
        height: 64px;
        line-height: 64px;
        padding: 0px 98px 0px 30px;
        position: relative;
        text-decoration: none;
        font-size: 22px;
        color: #005aaa;
        font-family: 'FuturaPT-Bold', arial, helvetica, sans;
    }

    .testnext:after {
        position: Absolute;
        text-align: center;
        font-size: 30px;
        right: 0px;
        top: 0px;
        height: 68px;
        width: 68px;
        background: #fbfbfb;
        content: "\f105";
        font-family: 'FontAwesome';
    }

    .testnext:hover {
        background: #fbfbfb;
    }

    .linesteps {
        position: relative;
        height: 37px;
        z-index: 3;
    }

    .linesteps:after {
        height: 3px;
        background: #d1d2d3;
        position: absolute;
        top: 17px;
        left: 0px;
        right: 0px;
        content: '';
        z-index: 2;
    }

    .linesteps:before {
        z-index: 4;
        left: 0px;
        top: 17px;
        height: 3px;
        background: #ed145b;
        position: absolute;
        content: '';
    }

    .linesteps .pic {
        width: 37px;
        height: 37px;
        background: #ed145b;
        color: #FFFFFF;
        font-size: 22px;
        line-height: 37px;
        text-align: Center;
        -webkit-border-radius: 18px;
        z-index: 10;
        position: relative;
        -moz-border-radius: 18px;
        border-radius: 18px;
        -webkit-box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.25);
        -moz-box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.25);
        box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.25);
    }

    .steps {
        position: relative;
    }


    .nextblock {
        float: right;
        display: inline-block;
        height: 64px;
        line-height: 64px;
        padding: 0px 98px 0px 30px;
        position: relative;
        text-decoration: none;
        font-size: 22px;
        color: #005aaa;
        font-family: 'FuturaPT-Bold', arial, helvetica, sans;
    }

    .nextblock:before {
        position: Absolute;
        text-align: center;
        font-size: 30px;
        right: 0px;
        top: 0px;
        height: 68px;
        width: 68px;
        background: #fbfbfb;
        content: "\f105";
        font-family: 'FontAwesome';
    }

    .nextblock:hover {
        background: #fbfbfb;
        cursor: pointer;
    }

    .nextblock:after {
        content: '';
        display: table;
        clear: both;
        width: 100%;
        height: 1px;
    }

    .nextblock a {
        text-decoration: None;
        color: #005aaa;
    }

    .steps .ansver div {
        padding: 5px 0px;
    }

    .steps .ansver div i {
        font-size: 18px;
        margin-right: 10px;
    }

    .steps .questtxt {
        max-width: 600px;
    }

    .steps .ansver {
        max-width: 600px;
        margin: 20px 0px;
    }


    #step1 .linesteps .pic {
        margin-left: 9%;
    }

    #step1 .linesteps:before {
        width: 9%;
    }

    #step2 .linesteps .pic {
        margin-left: 18%;
    }

    #step2 .linesteps:before {
        width: 18%;
    }

    #step3 .linesteps .pic {
        margin-left: 27%;
    }

    #step3 .linesteps:before {
        width: 27%;
    }

    #step4 .linesteps .pic {
        margin-left: 36%;
    }

    #step4 .linesteps:before {
        width: 36%;
    }

    #step5 .linesteps .pic {
        margin-left: 45%;
    }

    #step5 .linesteps:before {
        width: 45%;
    }

    #step6 .linesteps .pic {
        margin-left: 54%;
    }

    #step6 .linesteps:before {
        width: 54%;
    }

    #step7 .linesteps .pic {
        margin-left: 63%;
    }

    #step7 .linesteps:before {
        width: 63%;
    }

    #step8 .linesteps .pic {
        margin-left: 72%;
    }

    #step8 .linesteps:before {
        width: 72%;
    }

    #step9 .linesteps .pic {
        margin-left: 81%;
    }

    #step9 .linesteps:before {
        width: 81%;
    }

    #step10 .linesteps .pic {
        margin-left: 90%;
    }

    #step10 .linesteps:before {
        width: 90%;
    }

    #step11 .linesteps .pic {
        margin-left: 99%;
    }

    #step11 .linesteps:before {
        width: 99%;
    }

    #step1,
    #step2,
    #step3,
    #step4,
    #step5,
    #step6,
    #step7,
    #step8,
    #step9,
    #step10,
    #step11,
    #step12 {
        -moz-transition: right .75s ease-out, width 0s linear .75s;
        -o-transition: right .75s ease-out, width 0s linear .75s;
        -webkit-transition: right .75s ease-out, width 0s linear;
        -webkit-transition-delay: 0s, .75s;
        transition: right .75s ease-out, width 0s linear .75s;
        -moz-transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        right: -100%;
        display: none;
        width: 0px
    }

    .step_active {
        -o-transition: right .75s ease-out, width 0s linear 0s;
        -webkit-transition: right .75s ease-out, width 0s linear;
        -webkit-transition-delay: 0s, 0s;
        transition: right .75s ease-out, width 0s linear 0s;
        left: 0px !important;
        right: auto !important;
        width: 100% !important;
        display: block !important;
    }

    .otvet {
        max-width: 600px;
        display: none;
    }

    #step12 h2 {
        text-align: left !important;
    }

    .gologotop {
        cursor: pointer;
    }

    .reakziya {
        font-size: 16px;
        line-height: 20px;
        color: #939597;
        text-decoration: none;
        display: block;
        margin-top: 20px;
        float: right;
    }
</style>