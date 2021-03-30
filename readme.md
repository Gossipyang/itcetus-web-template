

# 文件结构

- public
  
    公共资源，比如网站头部、导航栏、网站底部等常驻网站的内容模块
- static

    静态资源，css,js,img,font 等
- 根目录
  
    网站页面
# 注意

    例如heap.php中有代码
    <link rel="stylesheet" href="./static/css/public.css"> 
    head.php是在index.php中引入的，那么./表示的就是index.php所在的目录，与head.php所在目录无关