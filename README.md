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
