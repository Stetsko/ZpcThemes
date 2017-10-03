<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 footer_phone">
                <div class="number"> <?php echo get_theme_mod('telephone_textbox',''); ?></div>
                <span class="callback">
                    <a href="#hidden_form" class="popap_f">замовити дзвінок</a></span>

            </div>
            <div class="col-md-2 col-sm-6 copyright">2017/Всі права захищені</div>
            <div class="col-md-3 col-sm-6 tov-zpk">ТОВ "ЗЕМПРОКОНСАЛТИНГ"</div>
            <div class="col-md-2 col-sm-6 up"><a href="#" id ="ToTop" >На верх</a></div>
            <div class="col-md-2 col-sm-12 footer-logo">  <?php  echo get_custom_logo(); ?></div>
        </div>
    </div>
</footer>

<div class="hidden">
    <div class="hiddenForm" id="hidden_form">
        <h3>Звязатись з нами</h3>
        <form action="#">
            <input type="text" name="name" placeholder="Імя" required>
            <input type="text" name="phone" placeholder="Телефон" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="submit" value="Зателефонуйте мені">
        </form>
    </div>
    <div class="hiddenForm orderForm" id="order_form">
        <h3>Замовити послугу</h3>
        <form action="#">
            <input id = "name-works" type="text" name="name" placeholder="Назва Послуги" required>
            <input type="text" name="name" placeholder="Імя" required>
            <input type="text" name="phone" placeholder="Телефон" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="submit" value="Замовити">
        </form>
    </div>
</div>


<!-- Optimized loading JS Start -->
<script>var scr = {"scripts":[
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>
<!-- Optimized loading JS End -->

<?php wp_footer();?>

</body>
</html>