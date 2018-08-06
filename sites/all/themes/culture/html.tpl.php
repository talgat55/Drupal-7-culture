<!DOCTYPE html>
<html<?php print $html_attributes; ?>>
<head>
    <meta name="yandex-verification" content="a492a40ce2f32422" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <?php if ($is_front) :?>


        <meta name="title" content="Омский портал «Культура» – это единый ресурс о культурной жизни Омска и Омской области">
        <meta name="description" content="Омский портал «Культура» – это единый ресурс, на котором сосредоточены новости, анонсы, спецпроекты и аналитические материалы о культурной жизни Омска и Омской области.">

    <?php endif; ?>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter49230295 = new Ya.Metrika2({
                        id:49230295,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/tag.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks2");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/49230295" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121337907-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121337907-1');
</script>

</head>

<body class="<?php print $classes;?>"  >


  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>