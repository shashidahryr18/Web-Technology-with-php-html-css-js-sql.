<?php
class Test {
    public static $count = 0;

    static function increment() {
        self::$count++;
    }
}

Test::increment();
Test::increment();

echo "Count: " . Test::$count;
?>