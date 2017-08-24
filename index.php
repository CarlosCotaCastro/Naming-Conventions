<?php
$title = 'Naming Conventions';
include('head.php');
?>

<h1><?=$title?></h1>

<p>This document serves the purpose to make to anybody who works on the bendenprojects the coding-style transparent.</p>

<p>A consistent coding-style is the key to readability.</p>

<h2>Tabs vs. Spaces</h2>
<p>We use tabs to indent the code. There is no need to press four times blank, when you simply can press one time tab.</p>
<p>Besides that: Teach your IDE to use tabs instead of blanks.</p>

<<h2>If Statements</h2>
<p>When possible use this notation:</p>
<pre>
    $s = ($foo > 1) ? 'bar' : '';
</pre>

<p>If the line would get to long:</p>

<pre>
    $s = ($foo > 1)
        ? $this->VeryLongFunctionNameThatIsUsedInRareOcassions($parameter)
        : 'bar'
    ;
</pre>

<p>In case you absolutely need to make make than one statement in an if or else case:</p>

<pre>
    if ($foo < $bar->length()) {
        $this->DoSomething($foo);
        $i++;
    } else {
        ...
    }
</pre>

<p>For a full if/ifelse/else statement use this syntax:</p>

<pre>
    if ($foo < $bar->length()) {
        $this->DoSomething($foo);
        $i++;
    } elseif ($foo < 1000) {
        ...
    } else {
        ...
    }
</pre>

<h2>Loops</h2>
<p>The most used loop for us is the <em>for</em> or <em>foreach</em> loop:</p>

<pre>
    foreach($l as $item) {
        $ret .= $this->RenderItem($item);
    }

    for($i=0; $i < count($array); $i++) {
        ...
    }
</pre>

<h2>Functions</h2>

<p>Functions start with one line</p>

<pre>
    public static function (int $descriptiveName, string $descriptiveNameForTheString) : returnType {
        // leave this line blank.
        $ret = ''; // But the return var in the first line; The return var is always $ret
        // Blank line
        ...

        // Blank line
        return $ret;
    }
</pre>

<?php include('footer.php'); ?>