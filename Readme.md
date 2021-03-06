## Facemash App - As featured in the movie "The Social Network".
<p align="center">
  <br><br>
  <img src="https://github.com/Jyotsna-Singh/Facemash-Laravel/blob/master/public/img/logo.PNG">
</p>

## 
This project is a clone of the **FaceMash App** as shown in the movie "The Social Network". It allows the players to rate two photos competitively. It uses the Elo Algorithm to calculate the rankings, expected probability of winning and losing. This app has been built with the PHP Laravel 5 Framework and uses Bootstrap for the Front-end.

* Features/Technologies: 
  * Laravel 5 Framework
  * Elo Algorithm
  * Bootstrap Framework

## Version
1.0.0 [![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](http://jyotsnasingh.com/projects/Laravel/Ecommerce/)

## Live Demo - FaceMash
[![alt tag](https://github.com/Jyotsna-Singh/SearchVidz-YoutubeAPI/blob/master/img/red-button.PNG)](http://jyotsnasingh.com/projects/Laravel/FaceMash/)

## Snapshots

**Game** |  
--- | 
![alt text](https://github.com/Jyotsna-Singh/Facemash-Laravel/blob/master/public/img/game.PNG "Game")  |  

**Bio** |  
--- | 
![alt text](https://github.com/Jyotsna-Singh/Facemash-Laravel/blob/master/public/img/bio.PNG "Bio")  |  

**Statistics** |  
--- | 
![alt text](https://github.com/Jyotsna-Singh/Facemash-Laravel/blob/master/public/img/stats.PNG "Stats")  |  

**Ranks** |  
--- | 
![alt text](https://github.com/Jyotsna-Singh/Facemash-Laravel/blob/master/public/img/ranks.PNG "Ranks")  |  


## Elo Algorithm
<p>Performance isn&#39;t measured absolutely; it is inferred from wins, losses, and draws against other players. Players&#39; ratings depend on the ratings of their opponents, and the results scored against them. The difference in rating between two players determines an estimate for the expected score between them. Both the average and the spread of ratings can be arbitrarily chosen. Elo suggested scaling ratings so that a difference of 200 rating points in chess would mean that the stronger player has an&nbsp;<em>expected score</em>&nbsp;(which basically is an expected average score) of approximately 0.75, and the USCF initially aimed for an average club player to have a rating of 1500.</p>

<p>A player&#39;s&nbsp;<em>expected score</em>&nbsp;is his probability of winning plus half his probability of drawing. Thus an expected score of 0.75 could represent a 75% chance of winning, 25% chance of losing, and 0% chance of drawing. On the other extreme it could represent a 50% chance of winning, 0% chance of losing, and 50% chance of drawing. The probability of drawing, as opposed to having a decisive result, is not specified in the Elo system. Instead a draw is considered half a win and half a loss.</p>

<p>If Player A has a rating of&nbsp;<img alt="R_{A}" src="https://wikimedia.org/api/rest_v1/media/math/render/svg/0b096f1c60d7fdc543f3bc583fe32601f1c2f0cf" />&nbsp;and Player B a rating of&nbsp;<img alt="R_{B}" src="https://wikimedia.org/api/rest_v1/media/math/render/svg/33d79a4532363bb4ed9602166704c3f98928478f" />, the exact formula &nbsp;for the expected score of Player A is</p>

<p><img alt="E_{A}={\frac {1}{1+10^{(R_{B}-R_{A})/400}}}." src="https://wikimedia.org/api/rest_v1/media/math/render/svg/51346e1c65f857c0025647173ae48ddac904adcb" /></p>

<p>Similarly the expected score for Player B is</p>

<p><img alt="E_{B}={\frac {1}{1+10^{(R_{A}-R_{B})/400}}}." src="https://wikimedia.org/api/rest_v1/media/math/render/svg/4b340e7d15e61ee7d90f428dcf7f4b3c049d89ff" /></p>

<p>When a player&#39;s actual tournament scores exceed his expected scores, the Elo system takes this as evidence that player&#39;s rating is too low, and needs to be adjusted upward. Similarly when a player&#39;s actual tournament scores fall short of his expected scores, that player&#39;s rating is adjusted downward. Elo&#39;s original suggestion, which is still widely used, was a simple linear adjustment proportional to the amount by which a player overperformed or underperformed his expected score. The maximum possible adjustment per game, called the K-factor, was set at&nbsp;<em>K</em>&nbsp;= 16 for masters and&nbsp;<em>K</em>&nbsp;= 32 for weaker players.</p>

<p>Supposing Player A was expected to score&nbsp;<img alt="E_{A}" src="https://wikimedia.org/api/rest_v1/media/math/render/svg/6d368f77b6dfe496467559869a421efed0881bcd" />&nbsp;points but actually scored&nbsp;<img alt="S_{A}" src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f581ca4fd5bc6d22270c6050703cf23e5b840435" />&nbsp;points. The formula for updating his rating is</p>

<p><img alt="R_{A}^{\prime }=R_{A}+K(S_{A}-E_{A})." src="https://wikimedia.org/api/rest_v1/media/math/render/svg/09a11111b433582eccbb22c740486264549d1129" /></p>

<p>This update can be performed after each game or each tournament, or after any suitable rating period. An example may help clarify. Suppose Player A has a rating of 1613, and plays in a five-round tournament. He or she loses to a player rated 1609, draws with a player rated 1477, defeats a player rated 1388, defeats a player rated 1586, and loses to a player rated 1720. The player&#39;s actual score is (0 + 0.5 + 1 + 1 + 0) = 2.5. The expected score, calculated according to the formula above, was (0.51 + 0.76 + 0.88 + 0.56 + 0.28) = 2.99. Therefore, the player&#39;s new rating is (1613 + 32&times;(2.5 &minus; 2.99)) = 1597, assuming that a K-factor of 32 is used.</p>

<p>Note that while two wins, two losses, and one draw may seem like a par score, it is worse than expected for Player A because his or her opponents were lower rated on average. Therefore, Player A is slightly penalized. If Player A had scored two wins, one loss, and two draws, for a total score of three points, that would have been slightly better than expected, and the player&#39;s new rating would have been (1613 + 32&times;(3 &minus; 2.99)) = 1613.</p>


<p align="center">
  <br><br>
  <img src="https://github.com/Jyotsna-Singh/Facemash-Laravel/blob/master/public/img/eduardo.jpg">
</p>

## Vendors
Laravel - [https://laravel.com/](https://laravel.com/) 


## License
MIT License

# Laravel
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).



