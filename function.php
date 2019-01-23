<?php
//wordpress 熊掌号机构化改造，这段代码放入风格文件的header.php中即可通过百度验证。
if(is_single()){
  $id = get_permalink();
  $pid = get_the_id();
  $title = get_the_title($pid);
  $img = current(get_attached_media('image'))->guid;
  if(empty($img)) $img = 'https://默认图片';
  $pubDate = get_the_time("Y-m-d\TH:i:s");
  $xzh = '<script src="//msite.baidu.com/sdk/c.js?appid=1614111683884403"></script><script type="application/ld+json">{"@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld","@id": "'.$id.'","appid": "1614111683884403","title": "'.$title.'","images": ["'.$img.'"], "pubDate": "'.$pubDate.'"}</script>';
  echo $xzh;
}
？>
  
//用于SEO header.php
	<?php
		if(is_front_page()){
			$keywords = '<meta name="keywords" content="趋势观察站,趋势观察,趋势分析,趋势研究,最新趋势" />';
			$description = '<meta name="description" content="趋势观察站是专业的趋势观察以及趋势研究与趋势分析的网站,免费的,公开的,持续的分享最新趋势发现." />';
			echo $keywords."\r\n\t".$description."\r\n" ;
		}
	?>

