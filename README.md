# PHP
1. Virtual box yüklenecek
2. Vagrant yüklenecek
3. Proje gitden pull edilecek
4. Proje içerisinden VagrantVirtualMachine içerisine gidilicek.
5. Vagrant up komutu çalıştırılacak.
  5.1. Bu komut ile VagrantVirtualMachine/puphpet/config.yaml içerisindeki belirtilen özellik ve proqramlara sahip bir makina kurulucak.
        Bunun amacı herkesin ortak bir development ortamına shaip olmasıdır. 
        
6. Yükleme işlemi tamamlandıktan sonra konfigurasyon dosyalarında belirtdiğimiz host name'ni lokalde tanımlamamız gerekli. Bunun için etc/hosts içerisine 192.168.56.100 local.guppy.com.tr eklenir.
7. Proje phpStormda açılır 
    
# MODEL / USE
1. Bazı temel olarak kullanılabilecek fonksiyonel model class ları eklendi. 
2. 'include' kullanımına gerek kalmadı use ile import yapabilmek için ClassAutoloader.class.php dosyası eklendi. 
3. Config.class.php altındaki ROOT_PATH i kendinize göre tanımlayınız. Gerekmedikçe bu php dosyasını commitlemeyiniz.
4. Ana dizine direk www altına dosya atılmamalı. (sadece index.php yeterli, home.php, address.php, login.php, distributer.php ve category.php dosyaları yerine controller altına Address.class.php şeklinde dosyalar açılabilir.). 
5. Linkten direk local.guppy.com.tr/trunk/www/?Index şeklinde çağrılabilir. Index yazdığım yere controller ın altındaki .class.php uzantılı dosyalar yazılacak. 
6. html içerisinden formdan post yapacaksanız post un içine controller/Index.class.php şeklinde verilmelidir.


# URL REWRITE (.htaccess), ve YENİLİKLER

1. trunk/www ana dizninine ".htaccess" dosyası oluşturulacak. Dosya commitlendi, çekilebilir. 
2. Böylece artık direk www altına koyulan  home.php, address.php, login.php, distributer.php ve category.php dosyaları kullanım dışı. Sadece var olan controller (admin, client, ana dizin) altındaki class lar gibi yazılması yeterli. 
3. ResourceBundle.class.php de url ve bizde gideceği linkleri tanımladım. Örneğin; login sayfasına gitmek için http://local.guppy.com.tr/trunk/www/login2 yazmak yeterli direk controller/admin altındaki Login.class.php deki index() metoduna gidiyor. 
4. Eğer aynı class ta (Login.class.php) de başka bir fonksiyon daha tanımlamak isterseniz (direk erişilmesini istiyosanız public function blabla() yapın). http://local.guppy.com.tr/trunk/www/productlist?asama=1 çağrıldığında controller/ProductList.class.php altındaki asama_1 fonksiyonuna gidecek. 
5. Ekstra parametre alması gerekiyorsa url den & ile normal servis gibi yazabilirsiniz. Request::_get('param1') şeklinde alabilirsiniz.
6. Ayrıca artık bu düzenlemeyle tüm sorgular index.php üzerinden gideceği için, tekrar index.php deki gibi require_once lara spl_autoload_register lara gerek yok. 
7. Kullanmak istediğiniz class ları "use" ile namespace ini düzgün yazarak kullabilirsiniz. 
8. Bir de mümkün olduğunca trunk/www/controller altındaki class larımızın class Index extends Controller{
   public function __construct(){
       parent::__construct($_GET);
   }
şeklinde başlamasına dikkat edelim. 
9. Dediğim gibi bu controller class larının url den direk erişilmesini istediğimiz tüm fonkisyonları (index()) gibi public function index() şeklinde olmalı
10. Eğer yeni bir controller tanımlayacaksak mesela controller/admin/ altına order ları göstermesi için bir sayfa yapacak olalım. Direk controller/admin/ altına "ShowOrders.class.php" oluşturuyoruz. Daha sonra ResourceBunle.class.php de (model/ altında) "GUPPYPAGELINKS" constant array ine array('url'=>'showorders', 'link'=>'controller\\admin\\ShowOrders') tanımlıyoruz. Ana dizinde showProducts.php oluşturmaya gerek yok. 