<?php 
//wordpress 熊掌号结构化改造
if(is_single()){
  $id = get_permalink();
  $pid = get_the_id();
  $title = get_the_title($pid);
  $img = current(get_attached_media('image'))->guid;
  if(empty($img)) $img = 'https://默认图片';
  $pubDate = get_the_time("Y-m-d\TH:i:s");
  $xzh = '<script src="//msite.baidu.com/sdk/c.js?appid=1614111683884403"></script><script type="application/ld+json">{"@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld","@id": '.$id.',"appid": "1614111683884403","title": '.$title.',"images": ['.$img.'], "pubDate": '.$pubDate.'}</script>';
  echo "".$xzh;
}
?>
