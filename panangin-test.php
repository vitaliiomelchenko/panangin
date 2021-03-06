<?php 

/**
 * Template name: Страница с тестом
 */

get_header();  ?>
<div class="breadcrumbs">
    <div class="container">
        <?php echo do_shortcode('[wpseo_breadcrumb]') ?>
    </div>
</div>
<div class="test-home container test-wrapper" style="margin-bottom: 70px">

    <div class="steps">

        <div id="step1" class="step_active">
            <div class="linesteps">
                <div class="pic"><div class="pic-inner"></div></div>
            </div>
            <div class="questtxt"><?php printf( _e('Вредные блюда самые вкусные. Поэтому я регулярно
                ем и жирное, и жареное. За день я съедаю до 60 г
                различных жиров и более 100 г мяса и колбасы ', 'Panangin'))?></div>
            <div class="ansver" id="ansver1">
                <div onclick="test_step(1,0)" id="ansver10"><i class="far fa-circle"></i><?php printf( _e('Нет, ни в коем случае', 'Panangin'))?></div>
                <div onclick="test_step(1,3)" id="ansver13"><i class="far fa-circle"></i><?php printf( _e('Да, но лишь иногда ', 'Panangin'))?></div>
                <div onclick="test_step(1,6)" id="ansver16"><i class="far fa-circle"></i><?php printf( _e('Не вижу смысла себя ограничивать и съедаю даже больше', 'Panangin'))?></div>
                    
            </div>
            <div class="nextblock button button-primary" onclick="gotostep('2')"><?php printf( _e('Далее', 'Panangin'))?></div>
            <div class="clearfix"></div>
        </div>

        <div id="step2">
            <div class="linesteps">
                <div class="pic"><div class="pic-inner"></div><span class="pic-inner"></span></div>
            </div>
            <div class="questtxt"><?php printf( _e('Мой вес превышает норму более чем на 5 кг', 'Panangin'))?></div>
            <div class="ansver" id="ansver2">
                <div onclick="test_step(2,0)" id="ansver20"><i class="far fa-circle"></i><?php printf( _e('Конечно же, нет', 'Panangin'))?></div>
                <div onclick="test_step(2,3)" id="ansver23"><i class="far fa-circle"></i><?php printf( _e('Да, но не больше 15 кг', 'Panangin'))?></div>
                <div onclick="test_step(2,6)" id="ansver26"><i class="far fa-circle"></i><?php printf( _e('Мой вес превышает норму более
                    чем на 15 кг, и с этим
                    ничего не поделать', 'Panangin'))?></div>
            </div>
            <div class="nextblock button button-primary" onclick="gotostep('3')"><?php printf( _e('Далее', 'Panangin'))?></div>
            <div class="clearfix"></div>
        </div>

        <div id="step3">
            <div class="linesteps">
                <div class="pic"><div class="pic-inner"></div></div>
            </div>
            <div class="questtxt"><?php printf( _e('Я считаю, что курить — это нормально', 'Panangin'))?></div>
            <div class="ansver" id="ansver3">
                <div onclick="test_step(3,0)" id="ansver30"><i class="far fa-circle"></i><?php printf( _e('Нет, не курю уже больше года', 'Panangin'))?>
                </div>
                <div onclick="test_step(3,8)" id="ansver38"><i class="far fa-circle"></i><?php printf( _e('Да, но не более 10 сигарет
                    ежедневно', 'Panangin'))?></div>
                <div onclick="test_step(3,11)" id="ansver311"><i class="far fa-circle"></i><?php printf( _e('Да, но не более двадцати
                    сигарет в день', 'Panangin'))?></div>
                <div onclick="test_step(3,14)" id="ansver314"><i class="far fa-circle"></i><?php printf( _e('Да, больше двадцати', 'Panangin'))?></div>
            </div>
            <div class="nextblock button button-primary" onclick="gotostep('4')"><?php printf( _e('Далее', 'Panangin'))?></div>
            <div class="clearfix"></div>
        </div>

        <div id="step4">
            <div class="linesteps">
                <div class="pic"><div class="pic-inner"></div></div>
            </div>
            <div class="questtxt"><?php printf( _e('За день я выпиваю больше двух кружек пива (бокалов вина, рюмок водки)', 'Panangin'))?></div>
            <div class="ansver" id="ansver4">
                <div onclick="test_step(4,0)" id="ansver40"><i class="far fa-circle"></i><?php printf( _e('Нет, за редким исключением', 'Panangin'))?>
                </div>
                <div onclick="test_step(4,2)" id="ansver42"><i class="far fa-circle"></i><?php printf( _e('Да, такое происходит довольно
                    часто', 'Panangin'))?></div>
                <div onclick="test_step(4,4)" id="ansver44"><i class="far fa-circle"></i><?php printf( _e('Да, я почти ежедневно выпиваю
                    даже больше', 'Panangin'))?></div>
            </div>
            <div class="nextblock button button-primary" onclick="gotostep('5')"><?php printf( _e('Далее', 'Panangin'))?></div>
            <div class="clearfix"></div>
        </div>


        <div id="step5">
            <div class="linesteps">
                <div class="pic"><div class="pic-inner"></div></div>
            </div>
            <div class="questtxt">
            <?php printf( _e('Я ужасно устаю от перегрузок на работе и дома. Порой почти дохожу до нервного срыва.', 'Panangin'))?>
            </div>
            <div class="ansver" id="ansver5">
                <div onclick="test_step(5,0)" id="ansver50"><i class="far fa-circle"></i><?php printf( _e('Нет, такое случается крайне
                    редко', 'Panangin'))?></div>
                <div onclick="test_step(5,2)" id="ansver52"><i class="far fa-circle"></i><?php printf( _e('Да, время от времени такое
                    бывает', 'Panangin'))?></div>
                <div onclick="test_step(5,4)" id="ansver54"><i class="far fa-circle"></i><?php printf( _e('Да, я просто живу в состоянии
                    перегрузок, и ничего не могу изменить', 'Panangin'))?></div>
            </div>
            <div class="nextblock button button-primary" onclick="gotostep('6')"><?php printf( _e('Далее', 'Panangin'))?></div>
            <div class="clearfix"></div>
        </div>

        <div id="step6">
            <div class="linesteps">
                <div class="pic"><div class="pic-inner"></div></div>
            </div>
            <div class="questtxt">
                <?php printf( _e('Я постоянно тревожусь о завтрашнем дне, боюсь неприятностей, которые он может
                принести.', 'Panangin'))?></div>
            <div class="ansver" id="ansver6">
                <div onclick="test_step(6,0)" id="ansver60"><i class="far fa-circle"></i><?php printf( _e('Нет, я вполне уравновешен', 'Panangin'))?>
                </div>
                <div onclick="test_step(6,2)" id="ansver62"><i class="far fa-circle"></i><?php printf( _e('Не всегда, но довольно часто', 'Panangin'))?>
                </div>
                <div onclick="test_step(6,4)" id="ansver64"><i class="far fa-circle"></i><?php printf( _e('Да, я уже давно испытываю
                    душевные муки', 'Panangin'))?></div>
            </div>
            <div class="nextblock button button-primary" onclick="gotostep('7')"><?php printf( _e('Далее', 'Panangin'))?></div>
            <div class="clearfix"></div>
        </div>


        <div id="step7">
            <div class="linesteps">
                <div class="pic"><div class="pic-inner"></div></div>
            </div>
            <div class="questtxt"><?php printf( _e('У моих родных артериальное давление повышено ', 'Panangin'))?></div>
            <div class="ansver" id="ansver7">
                <div onclick="test_step(7,0)" id="ansver70"><i class="far fa-circle"></i><?php printf( _e('Нет, во всяком случае, я об
                    этом не знаю', 'Panangin'))?></div>
                <div onclick="test_step(7,2)" id="ansver72"><i class="far fa-circle"></i><?php printf( _e('Да, этим страдал один из
                    родителей', 'Panangin'))?></div>
                <div onclick="test_step(7,4)" id="ansver74"><i class="far fa-circle"></i><?php printf( _e('Да, у обоих родителей и (или)
                    у братьев и сестер', 'Panangin'))?></div>
            </div>
            <div class="nextblock button button-primary" onclick="gotostep('8')"><?php printf( _e('Далее', 'Panangin'))?></div>
            <div class="clearfix"></div>
        </div>

        <div id="step8">
            <div class="linesteps">
                <div class="pic"><div class="pic-inner"></div></div>
            </div>
            <div class="questtxt"><?php printf( _e('У меня частенько болит голова, порой она словно свинцом налита. ', 'Panangin'))?></div>
            <div class="ansver" id="ansver8">
                <div onclick="test_step(8,0)" id="ansver80"><i class="far fa-circle"></i><?php printf( _e('Нет, этого почти не случается', 'Panangin'))?>
                </div>
                <div onclick="test_step(8,2)" id="ansver82"><i class="far fa-circle"></i><?php printf( _e('Нечасто, хотя и чаще, чем
                    раньше', 'Panangin'))?></div>
                <div onclick="test_step(8,4)" id="ansver84"><i class="far fa-circle"></i><?php printf( _e('Да, часто', 'Panangin'))?></div>
            </div>
            <div class="nextblock button button-primary" onclick="gotostep('9')"><?php printf( _e('Далее', 'Panangin'))?></div>
            <div class="clearfix"></div>
        </div>

        <div id="step9">
            <div class="linesteps">
                <div class="pic"><div class="pic-inner"></div></div>
            </div>
            <div class="questtxt"><?php printf( _e('Здоровый сон для меня — несбыточная мечта.', 'Panangin'))?></div>
            <div class="ansver" id="ansver9">
                <div onclick="test_step(9,0)" id="ansver90"><i class="far fa-circle"></i><?php printf( _e('Нет, я хорошо сплю', 'Panangin'))?></div>
                <div onclick="test_step(9,2)" id="ansver92"><i class="far fa-circle"></i><?php printf( _e('По-разному: иногда сразу засыпаю, иногда мучаюсь', 'Panangin'))?></div>
                <div onclick="test_step(9,4)" id="ansver94"><i class="far fa-circle"></i><?php printf( _e('Я плохо засыпаю и вынужден
                    принимать снотворное', 'Panangin'))?>
                </div>
            </div>
            <div class="nextblock button button-primary" onclick="gotostep('10')"><?php printf( _e('Далее', 'Panangin'))?></div>
            <div class="clearfix"></div>
        </div>



        <div id="step10">
            <div class="linesteps">
                <div class="pic"><div class="pic-inner"></div></div>
            </div>
            <div class="questtxt"><?php printf( _e('Даже при небольших нагрузках и в состоянии покоя у меня
                случается сильное сердцебиение, порой с перебоями.', 'Panangin'))?></div>
            <div class="ansver" id="ansver100">
                <div onclick="test_step(10,0)" id="ansver1000"><i class="far fa-circle"></i><?php printf( _e('Нет, у меня никогда не было
                    таких проблем', 'Panangin'))?></div>
                <div onclick="test_step(10,2)" id="ansver1002"><i class="far fa-circle"></i><?php printf( _e('Да, у меня это случается,
                    но редко и не интенсивно', 'Panangin'))?></div>
                <div onclick="test_step(10,6)" id="ansver1006"><i class="far fa-circle"></i><?php printf( _e('Да, все чаще и тревожнее', 'Panangin'))?>
                </div>
            </div>
            <div class="nextblock button button-primary" onclick="gotostep('11')"><?php printf( _e('Далее', 'Panangin'))?></div>
            <div class="clearfix"></div>
        </div>


        <div id="step11">
            <div class="linesteps">
                <div class="pic"><div class="pic-inner"></div></div>
            </div>
            <div class="questtxt"><?php printf( _e('Я человек активный, даже неугомонный. Только и жду
                задач, требующих решения!', 'Panangin'))?></div>
            <div class="ansver" id="ansver11">
                <div onclick="test_step(11,0)" id="ansver110"><i class="far fa-circle"></i><?php printf( _e('Нет, я себя не отношу к
                    таковым', 'Panangin'))?></div>
                <div onclick="test_step(11,2)" id="ansver112"><i class="far fa-circle"></i><?php printf( _e('Да, я, скорее, заводной, чем
                    спокойный, но могу заставить себя и отключиться', 'Panangin'))?></div>
                <div onclick="test_step(11,4)" id="ansver114"><i class="far fa-circle"></i><?php printf( _e('Да, я постоянно в заведенном
                    состоянии, часто до полного изнеможения', 'Panangin'))?></div>
            </div>
            <div class="nextblock button button-primary" onclick="gotostep('12')"><?php printf( _e('Далее', 'Panangin'))?></div>
            <div class="clearfix"></div>
        </div>


        <div id="step12">
            <h2><?php printf( _e('Результат', 'Panangin'))?></h2><br><br>
            <div id="otvet1" class="otvet">
                <?php printf( _e('                
                Если вы не приукрашиваете, для развития артериальной гипертензии нет особых причин. Однако помните о
                пользе зарядки
                и прогулок на свежем воздухе. Включите в рацион полезные продукты, богатые солями магния (овсяную крупу,
                шиповник, орехи,
                отруби) и калия (печеный картофель, изюм, курагу, чернослив,
                капусту, баклажаны, абрикосы). Не забудьте и о морепродуктах.
                А если вам более 40 лет, не реже двух раз в год следует проходить
                обследование', 'Panangin'))?>
            </div>

            <div id="otvet2" class="otvet">

                <?php printf( _e('                
                Повысилось ли ваше кровяное давление или пока еще нет,
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
                предвестник или первая ступень гипертонии.', 'Panangin'))?>
            </div>
            <div id="otvet3" class="otvet">

                <?php printf( _e('                
                    Вы принадлежите к типу людей, склонных к повышенному
                    давлению. Только врач может констатировать, имеется ли у вас
                    гипертония или вы лишь провоцируете ее появление дурными
                    привычками. Откажитесь от сахара, сладостей, мучных блюд,
                    кондитерских изделий, старайтесь меньше есть жирного, жареного, соленого. А вот овощей, притом в сыром
                    виде, включайте
                    в рацион как можно больше. И примите к сведению: теряя один
                    килограмм своих жировых запасов, вы снижаете артериальное
                    давление в среднем на один миллиметр ртутного столба', 'Panangin'))?>
            </div>
            <div id="otvet4" class="otvet">
            <?php printf( _e('
                Если вы ничего не преувеличили, вам серьезно угрожает
                гипертензия. Немедленно отправляйтесь к врачу. Не уклоняйтесь от этого решения. Вам нужно проверить
                сердце и почки.
                Боритесь с излишками веса, откажитесь от курения и алкоголя. И помните: чтобы жить долго и хорошо,
                необходимо
                заботиться о собственном здоровье.', 'Panangin'))?>
            </div>
            <a class="nextblock button button-primary" style="margin-top: 40px;" href="https://panangin.levelmedia.com.ua/test-nachalo/">В начало</a>
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
<section class="posts_block">
    <?php 
    if( get_locale() == 'uk'){
        $blockTitle = 'Корисні поради';
        $blockButton = 'Всі новини';
        $postButton = 'Читати далі';
    }   
    elseif(get_locale() == 'ru_RU'){
        $blockTitle = 'Полезные советы';
        $blockButton = 'Все новости';
        $postButton = 'Читать дальше';
    }
    ?>
    <div class="page__heading"><?php echo $blockTitle; ?></div>
        <div class="container">
            <ul class="row blog__row">

                <?php 
                $args = array(
                    'posts_per_page' => 3,
                );    
                $query = new WP_Query( $args ); ?>
                    <?php if ( $query->have_posts() ) : ?>
	                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <li class=" blog__item col-lg-4 col-md-6 col-sm-6">
                                <div class="blog__itemInner">
                                    <div class="blog__itemImageWrapper">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                    </div>
                                    <div class="blog__itemContent">
                                        <h5>
                                            <?php the_title(); ?>
                                        </h5>
                                        <a class="blog-button" href="<?php echo get_the_permalink(); ?>"><?php echo $postButton; ?><svg width="17" height="15"
                                                viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.75 7.72559L0.75 7.72559" stroke="#58585B" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502" stroke="#58585B"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                <p><?php esc_html_e( 'Нет постов по вашим критериям.' ); ?></p>
            <?php endif; ?>                
        </ul>
        <div class="button-wrapper">
            <a href="https://panangin.levelmedia.com.ua/korisni-poradi/" class="button button-primary"><?php echo $blockButton; ?></a>
        </div>
    </div>
</section>
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
        jQuery('#ansver' + stepid + ' i').removeClass(' far fa-dot-circle');
        jQuery('#ansver' + stepid + ' i').addClass('far fa-circle');
        jQuery('#ansver' + stepid + nomid + ' i').removeClass('far fa-circle ');
        jQuery('#ansver' + stepid + nomid + ' i').addClass('far fa-dot-circle');
        jQuery('#valstep' + step).val(nomid);
    }
</script>


<style>

</style>
