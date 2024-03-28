<?php
    // 기본 연산
    $a = 100;
    $b = 50;
    $c = $a + $b;
    echo "\$c = $c<br>"; //출력결과 $c = 150

    // 문자열 같은 경우에는
    $string = "1234"
    $string2 = "5678"
    $string3 = $string. $string2;
    echo "\$string = $string<br>"; //출력결과 $string = 12345678
    
    // img 태그 사용
    echo "<img src='이미지'></img>";
?>
<p>이런 식으로도 가능합니다.</p>
<p>a의 값은 = <?=$a></p>