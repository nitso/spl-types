<?php

if (!class_exists("SplType", false)) {
    class_alias("\Ducks\Component\SplTypes\SplType", "SplType", true);
    class_alias("\Ducks\Component\SplTypes\SplBool", "SplBool", true);
    class_alias("\Ducks\Component\SplTypes\SplEnum", "SplEnum", true);
    class_alias("\Ducks\Component\SplTypes\SplFloat", "SplFloat", true);
    class_alias("\Ducks\Component\SplTypes\SplInt", "SplInt", true);
    class_alias("\Ducks\Component\SplTypes\SplString", "SplString", true);
}