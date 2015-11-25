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
