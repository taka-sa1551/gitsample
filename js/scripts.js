
// jQuery
// $(function(){
//   // ▼マウスが載ったらサブメニューを表示
//   $("nav_menu_li").on('click', function(){
//       $(this).siblings().find("ul").hide();  // 兄弟要素に含まれるサブメニューを全部消す。
//       $(this).children().slideDown(200);     // 自分のサブメニューを表示する。
//   });
//   // ▼どこかがクリックされたらサブメニューを消す
//   $('html').click(function() {
//       $('sub_menu_ul').slideUp(200);
//   });
// });


//サイドバーnav項目読込
$(function(){
  $('.l-side__nav').load("side.html");
});

// $(function() {
//   $("#.column__nav").load("sidebar.html");
//   $("#side").load("side.html");
//   $("#footer").load("footer.html");
// });

// //　パソコン
// $('.nav_menu_li').hover(
//   function() {
//     // マウスオーバー時
//     $(".sub_menu_ul:not(:animated)", this).slideDown(200);
//   },
//   function() {
//     // マウスアウト時
//     $(".sub_menu_ul", this).slideUp(200);
//   }
// );

// //タブレット以下 3本線クリック時
// $('.nav_btn a').on('click',function(e){
//   e.preventDefault();
//   $('nav').slideToggle(200);
//   if( $('.nav_btn a').hasClass('close')){
//     // openクラスに変更
//     console.log("open_addclass");
//     $('.nav_btn a').removeClass('close');
//     $('.nav_btn a').addClass('open');
//   }else {
//     // closeクラスに変更
//     console.log("lose_addclass");
//     $('.nav_btn a').removeClass('open');
//     $('.nav_btn a').addClass('close');
//   }
// });

// //タブレット以下 リスト第二階層表示　マウスオーバー時
// $('.nav_menu_li').mouseover(function(e) {
//   $(this).find('.nav_menu_li_trigger').addClass("open");
// })
// $('.nav_menu_li').mouseout(function(e) {
//   $(this).find('.nav_menu_li_trigger').removeClass("open");
// })

