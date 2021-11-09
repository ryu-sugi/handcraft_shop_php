// エラーチェック厳密化の記述
'use strict'

{
 // HTLからIDで取得してくる為の記述
 const open = document.getElementById('open');

 // querySelectorを使用する事でCSSセレクタを取得してくる
 const overlay = document.querySelector('.overlay');

 // HTMLから'close'IDを取得してくる
 const close = document.getElementById('close');

 // クリックする事でイベント発火させる為の記述
 open.addEventListener('click', () => {
   overlay.classList.add('show'); //overlayのshowクラスを指定
   open.classList.add('hide'); //openのhideクラスを指定
 });

 close.addEventListener('click', () => {
  overlay.classList.remove('show'); 
  open.classList.remove('hide'); 
});

}