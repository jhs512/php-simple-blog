<?php
include_once 'db.php';
?>
<!doctype html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>홍길동 블로그 - <?=$pageTitle?></title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="/reousrce/app.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<header class="top-bar con-min-width">
		<div class="con height-100p flex">
      <a href="/" class="top-bar__logo flex flex-ai-c">
        <i class="fas fa-helicopter"></i>
        <span>HONGS BLOG</span>
      </a>
      <div class="flex-grow-1"></div>
      <nav class="top-bar__menu">
        <ul class="flex height-100p">
          <li>
            <a href="/" class="flex flex-ai-c height-100p hover-underline">
              <i class="fas fa-home"></i>
              &nbsp;
              <span>HOME</span>
            </a>
          </li>
          <li>
            <a href="/article_list.php" class="flex flex-ai-c height-100p hover-underline">
              <i class="fas fa-list"></i>
              &nbsp;
              <span>LIST</span>
            </a>
          </li>
          <li>
            <a href="/write_article.php" class="flex flex-ai-c height-100p hover-underline">
              <i class="fas fa-pen"></i>
              &nbsp;
              <span>WRITE</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
	</header>

  <div class="title-bar con-min-width">
    <h1 class="con">
      <?=$pageTitle?>
    </div>
  </div>