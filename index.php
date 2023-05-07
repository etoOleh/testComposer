<?php
require __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create();
// в FakerPHP нет возможности создавать картинки (либо я не понял как)
// я облазил их документацию и в разделе Third-Party Libraries (Сторонние библиотеки)
// обнаружил xvladqt/faker-lorem-flickr: Generate images using loremflickr.com
// так как ресурс picsum.photos в РФ закрыт выбрал loremflickr.com
// так же подкл его и начал работу
$faker->addProvider(new \Xvladqt\Faker\LoremFlickrProvider($faker));
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $faker->name(); ?></title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"
          media="print" onload="this.media='all'"/>
    <link href="./css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/main.css?ver=1.2.0" rel="stylesheet">
</head>
<body id="top">
<div class="section pt-4 px-3 px-lg-4" id="about">
    <div class="container-narrow">
        <div class="row">
            <div class="col-md-6">
                <h2 class="h4 my-2">Привет! Меня зовут <?php echo $faker->name(); ?>.</h2>
                <p><?php echo $faker->text(); ?></p>
                <div class="row mt-3">
                    <div class="col-sm-2">
                        <div class="pb-1">Age:</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pb-1 fw-bolder"><?php echo $faker->randomDigit(); ?></div>
                    </div>
                    <div class="col-sm-2">
                        <div class="pb-1">Email:</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pb-1 fw-bolder"><?php echo $faker->email(); ?></div>
                    </div>
                    <div class="col-sm-2">
                        <div class="pb-1">Skype:</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pb-1 fw-bolder"><?php echo $faker->word(); ?></div>
                    </div>
                    <div class="col-sm-2">
                        <div class="pb-1">Phone:</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pb-1 fw-bolder"><?php echo $faker->PhoneNumber(); ?></div>
                    </div>
                    <div class="col-sm-2">
                        <div class="pb-1">Address:</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="pb-1 fw-bolder"><?php echo $faker->Address(); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 offset-md-1">
                <img class="avatar img-fluid mt-2" src="<?php echo $faker->imageUrl($width = 640, $height = 480);?>" width="400" height="400"
                     alt="Фейковая аватарка"/>
            </div>
        </div>
    </div>
</div>
</body>
</html>