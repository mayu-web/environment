<?php
define("CHAT", "chat.txt");

date_default_timezone_set('Asia/Tokyo');

if($_SERVER["REQUEST_METHOD"] === "POST"){
	$text = $_POST['message'] . "," . date('m月d日　H時i分5秒'). "\n";
	file_put_contents(CHAT, $text, FILE_APPEND);
}




?>
<!DOCTYPE html>
<html lang="en">
<link rel="stytype" href="text/css">
<head> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>情報共有アプリ</title>
	<style type="text/css">
  body {
    background-image: url(../img/002.png);
  }
h1{
  text-align: center;
  font-size: 68px;
  background: #fff;
}
h2{
  font-size: 22px;
  font-family: 'YuGothic';
  background: #fff;
}
h3{
  font-size: 22px;
  font-family: 'YuGothic';
  background: #fff;
}
h4{
  font-size: 22px;
  font-family: 'YuGothic';
  background: #fff;
}
h5{
  font-size: 22px;
  font-family: 'YuGothic';
  background: #fff;
}
p{font-family: 'YuGothic';
  text-align: center;
  background: #fff;
}
		
.tab {
  width: 1050px;
}
.tab-nav {
  display: flex;
  text-align: center;
  margin: 0 auto;
}
.tab-nav-item {
  margin-right: 8px;
  margin-left: 8px;
  background: #ccc;
  color: #000;
  padding: 10px 10px;
  text-decoration: none;
  border-radius: 5px 5px 0 0;
}
.tab-nav-item.is-active {
  background: #000;
  color: #fff;
}
.tab-contents {
  border: 5px solid #ccc;
  padding: 30px;
  text-align: center;
  background: #fff;
}
.tab-contents-item {
  display: none;
}

	
		*{margin: 0;padding: 0;list-style: none;}
		.wrap{
			width: 800px;
			margin: 0 auto;
			padding: 20px 0 100px 0;
			background: #f1f1f2;
			min-height: 100vh;
		}
		li{
			position: relative;
			padding: 10px 20px;
			margin: 0 10px 10px 10px;
			background-color: #fff;
			border-radius: 5px;
		}
		span{
			position:  absolute;
			top: 50%;
			transform: translateY(-50%);
			right: 10px;
			font-size: 12px;
			color: #ccc;
		}
		form{
			position: fixed;
			top: 66%;
			left: 70vw;
		}
		
		
	</style>
</head>
	<h1>environmental problem</h1>
  <p>ーーーーーーー「ゴミ」を「資源」に変え持続可能な未来へーーーーーーー</p>
  <p>
   <a href="#toc id 1.0.">1.0. コンポストとは</a>
  </p>
  <p>
   <a href="#toc id 1.1.">1.1. 家庭や飲食店での取り組み方</a>
  </p>
  <p>
   <a href="#toc id 1.2.">1.2. コンポストボックスに入れられるもの</a>
  </p>
  <p>
    <a href="#toc id 1.3.">1.3. 情報共有をしよう！</a>
  </p>
<p>
  <h2 id="toc id 1.0.">1.0.生ゴミなどの有機物を容器に入れ微生物の働きを活用して発酵・分解し堆肥となったもの</h2>
</p>
<p>  
  <h3 id="toc id 1.1.">1.1.日々発生している生ゴミを容器に入れ、土を被せ、定期的に中身をかき混ぜ、保温して放置するだけ</h3>
</p>
<p>
  <h4 id="toc id 1.2.">1.2.コンポストボックスに入れられるもの</h4>
</p>
	<div class="tab" id="https://code.jquery.com/jquery-3.5.0.js">
	<div class="tab-nav">
      <a href="" class="tab-nav-item is-active" data-nav="0">大変分解しやすいもの</a>
      <a href="" class="tab-nav-item" data-nav="1">分解しやすいもの</a>
      <a href="" class="tab-nav-item" data-nav="2">やや分解しやすいもの</a>
      <a href="" class="tab-nav-item" data-nav="3">やや分解しにくいもの</a>
      <a href="" class="tab-nav-item" data-nav="4">分解しにくいもの</a>
      <a href="" class="tab-nav-item" data-nav="5">分解できないもの</a>
      <a href="" class="tab-nav-item" data-nav="6">入れてはいけないもの</a>
    </div>
    <div class="tab-contents">
      <div class="tab-contents-item" data-content="0">
        ・米ぬか
        ・廃食用油
        ・パン粉
        ・天ぷらかす
        ・フライ衣かす
        ・酒粕
        ・粉物
        ・生クリーム
      </div>
      <div class="tab-contents-item" data-content="1">
        ・茹でてある麺類
        ・米
        ・バナナの皮
        ・魚の内臓（生のままだと異臭が発生するためお湯などで火を通す）
      </div>
      <div class="tab-contents-item" data-content="2">
        ・枝豆のさや（茹でたもの）・野菜（茹でたもの）・きのこ（茹でたもの）
      </div>
       <div class="tab-contents-item" data-content="3">
        ・きのこ類（未加熱のもの）・カイワレ大根の根・魚の骨・こんにゃく・生玉ねぎ
      </div>
       <div class="tab-contents-item" data-content="4">
        ・卵の殻（入れるときはできるだけ細かくする）・鶏皮・キャベツの芯・トウモロコシの皮
      </div>
       <div class="tab-contents-item" data-content="5">
        ・トウモロコシの芯・玉ねぎの皮・鶏の骨・落花生の皮
      </div>
       <div class="tab-contents-item" data-content="6">
        ・調味料・タバコ
      </div>
    </div>
  
  <h5 id="toc id 1.3.">1.3.情報共有</h5>
	<div class="wrap">
		<ul>
			
		</ul>	
	</div>

	<form action="index.php" method="post">
		<input type="text" name="message">
		<button>送信</button>
	</form>

	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	<script>
		(()=>{

	const $doc = document;
	const $tab = $doc.getElementById("https://code.jquery.com/jquery-3.5.0.js");
	const $nav = $tab.querySelectorAll('[data-nav]');
	const $content = $tab.querySelectorAll('[data-content]');
	const ACTIVE_CLASS = 'is-active';
	const navLen = $nav.length;

     //初期化
	 const init = () => {
		$content[0].style.display = 'block';
	 };
     init();

     //クリックしたら起こるイベント
     const handleClick = (e) => {
       e.preventDefault();

       //クリックされたnavとそのdataを取得
       const $this = e.target;
       const targetVal = $this.dataset.nav;

        //対象外のnav,content全て一旦リセットする
        let index = 0;
        while(index < navLen){
        	$content[index].style.display = 'none';
        	$nav[index].classList.remove(ACTIVE_CLASS);
        	index++;
        }
　　　　　//対象のコンテンツをアクティブ化する
     	$tab.querySelectorAll('[data-content="' + targetVal + '"]')[0].style.display = 'block';
     	$nav[targetVal].classList.add(ACTIVE_CLASS);
     	console.log('$nav[targetVal].classList', $nav[targetVal].classList);

     };

     //全nav要素に対して関数を適応・発火
     let index = 0;
     while(index < navLen){
     	$nav[index].addEventListener('click', (e) => handleClick(e));
     	index++;
     }

     $nav[0].addEventListener('click', (e) => handleClick(e));

	console.log('$content', $content);
	


})();

		$(function(){
			$.ajax({
				url: 'chat.txt',
			})
			.done(function(data) {
			  data.split('\n').forEach(function(chat){
				const post_text = chat.split(',')[0];
				const post_time = chat.split(',')[1];
				if(post_text){
				  const li = `<li>${post_text}<span>${post_time}</span></li>`;
				  $('ul').append(li);

			    }
			  });
		   });
	     });

	</script>

</body>
</html>