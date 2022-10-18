<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <header>Header</header>
  <main>
    <img src="https://developer.mozilla.org/assets/mdn_contributor.png" alt="">
    <h1>This is heading 1</h1>
    <h2>This is heading 2</h2>
    <h3>This is heading 3</h3>
    <h4>This is heading 4</h4>
    <h5>This is heading 5</h5>
    <h6>This is heading 6</h6>
    <p>Taciti duis quis aptent in mauris leo ligula. Ad magna praesent vivamus sem consectetur sit tristique curae.
      <span style="font-style: italic;">Aptent sollicitudin et pulvinar facilisis viverra feugiat tristique imperdiet.
        Luctus ligula aptent urna id
        dictumst
        nisl.</span>
      Eget ridiculus nisi at class interdum massa congue inceptos augue erat. Natoque ipsum class vestibulum
      habitant
      egestas nisi himenaeos morbi sollicitudin hendrerit. Urna viverra lorem faucibus ridiculus fusce ante neque.
      Penatibus
      maximus mollis molestie si letius ullamcorper quisque senectus..
    </p>
    <button>Button</button>
     <?php

$menu = [
    'Topic 1' => ['Article 1', 'Article 2'],
    'Topic 2' => ['Article 1', 'Article 2', 'Article 3'],
    'Topic 3' => ['Article 1'],
];

echo "<div id='list-1'><ol>";

foreach ($menu as $key => $val) {
    echo '<li>' . $key . '</li>';
    echo "<div id='list-2'><ul>";

    foreach ($val as $value) {
        echo '<li>' . $value . '</li>';
    }
    echo '</ul></div>';
}
echo '</ol></div>';

?>

    <a href="https://www.google.com/" target="_blank">Search with Google</a>
  </main>
  <footer>Footer</footer>
  <script src="js/script.js"></script>
</body>

</html>
