<?php 
// ヘッダーロゴをカスタムできるように
$custom_header_defaults = array(
  'default-image' => get_bloginfo('template_url').'/images/headers/logo.png',
  'header-text' => false, //ヘッダー画像上にテキストをかぶせない
);
// ヘッダーのカスタムを有効に
add_theme_support('custom-header', $custom_header_defaults);

// カスタムメニュー(navbar)使用
register_nav_menu('mainmenu', 'ナビバーの位置');

// ページネーション設定
function pagination($pages = '', $range = 2){
  $showitems = ($range * 2)+1; // 表示するページ数
  
  global $paged; // 現在のページ値
  if(empty($paged)) $paged = 1;
  
  if($pages == ''){
    global $wp_query;
    $pages = $wp_query->max_num_pages; // 全ページ数取得
    if(!$pages) { // 全ページ数が空の場合、1とする
      $pages = 1;
    }
  }
  
  if(1 != $pages){ //全ページが1出ない場合はページネーションを表示
    echo "<nav aria-label=\"ページ送り\">\n";
    echo "<ul class=\"pagination\">\n";
    //Prev：現在のページ数が1より大きい場合
    if($paged > 1) echo "<li class=\"page-item prev\"><a class=\"page-link\" href='".get_pagenum_link($paged - 1)."'>前</a></li>\n";
    
    for ($i=1; $i <= $pages; $i++){
      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
        // 三項演算子での条件分岐
        echo ($paged == $i)? "<li class=\"page-item active\"><a class=\"page-link\">".$i."</a></li>\n":"<li><a class=\"page-link\" href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
      }
    }
    // Next：総ページ数より現在のページ値が小さい場合は表示
    if ($paged < $pages) echo "<li class=\"page-item\"><a class=\"page-link\" href=\"".get_pagenum_link($paged + 1)."\">次</a></li>\n";
    echo "</ul>\n";
    echo "</nav>\n";
  }
}

/*============================
 カスタムフィールド
============================*/
// 投稿ページに表示するカスタムボックスを定義
add_action('admin_menu', 'add_custom_inputbox');
// 追加した表示項目のデータ更新・保存のためのアクションフック
add_action('save_post', 'save_custom_postdata');

// 入力項目がどの投稿タイプのページに表示されるのかの設定
function add_custom_inputbox(){
  // 第一引数：編集画面のhtmlに挿入されるid属性名
  // 第二引数：管理画面に表示されるカスタムフィールド名
  // 第三引数：メタボックスの中に出力される関数名
  // 第四引数：管理画面に表示するカスタムフィールドの場所(postなら投稿、pageなら固定ページ)
  // 第五引数：配置される順序
  add_meta_box('about_id', 'ABOUT入力欄', 'custom_area_1', 'page', 'normal');
  add_meta_box('image_top_id', 'バナー画像', 'custom_area_2', 'page', 'normal');
}

// 管理画面に表示される内容
function custom_area_1(){
  global $post;
  
  echo '<textarea cols="50" rows="5" name="about_msg">'.get_post_meta($post->ID, 'about', true).'</textarea><br>';
}

function custom_area_2() {
  global $post;
  echo 'トップ画像URL：<input type="text" name="image_top" value="'.get_post_meta($post->ID, 'imagebanner', true).'"><br>※画像をアップロードし、そのURLを貼り付けてください。';
}

// 投稿ボタンを押した際のデータの更新と保存
function save_custom_postdata($post_id){
  $about_msg = '';
  $image_top = '';
  // IMAGE TOP
  if(isset($_POST['image_top'])){
    $image_top = $_POST['image_top'];
  }
  if($image_top != get_post_meta($post_id, 'imagebanner', true )){
    update_post_meta($post_id, 'imagebanner', $image_top);
  }elseif($image_top == ''){
    delete_post_meta($post_id, 'imagebanner', get_post_meta($post_id, 'imagebanner', true));
  }
  // ABOUT MSG
  //カスタムフィールドに入力された情報を取り出す
  if(isset($_POST['about_msg'])){
    $about_msg = $_POST['about_msg'];
  }
  
  //内容が変わっていた場合、保存していた内容を更新する
  if($about_msg != get_post_meta($post_id, 'about', true)){
    update_post_meta($post_id, 'about', $about_msg);
  }elseif($about_msg == ''){
    delete_post_meta($post_id, 'about', get_post_meta($post_id, 'about', true));
  }
}

/*============================
 カスタムウィジェット
============================*/



/*============================
 その他ファンクション
============================*/

// ログインすると管理バー分あくのでhtmlに変なmargin-topが入る。ので却下
add_filter( 'show_admin_bar', '__return_false' );

// タイトルタグ加工
add_theme_support( 'title-tag' );

//絶対パス→相対パス
function make_href_root_relative($input) {
  return preg_replace('!http(s)?://' . $_SERVER['SERVER_NAME'] . '/!', '/', $input);
}

//パーマリンク絶対パス→相対パス
function root_relative_permalinks($input) {
  return make_href_root_relative($input);
}
add_filter( 'the_permalink', 'root_relative_permalinks' );