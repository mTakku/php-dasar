
<p align="center" >
  <b>POINT UTAMA</b>
</p>

---
> #### PHP DASAR
> - PHP adalah singkatan dari PHP Hypertext Preprocessor, diciptakan pertama kali oleh Rasmus Lerdorf pada tahun 1995.
> - PHP file kode program selalu diakhiri dengan extension .php
> - Kode program PHP harus dimulai dengan tag pembuka yaitu seperti :
>
>    ![image](https://github.com/mTakku/php-dasar/assets/145539342/0dc654d8-5ebb-4786-b59c-20ec10f81ec7)
---
> #### OPEN SOURCE
>
> - PHP adalah bahasa pemrograman yang opensource
> - Kita dapat download PHP di website php.net
> - Atau bisa liat source code nya di halaman github [php](https://github.com/php/php-src).
---
> #### TIPE DATA NUMBER
> Di PHP terdapat 2 jenis tipe data number yaitu :
> - (int) Bilangan bulat decimal (base 10),hexadecimal (base 16), octa (base 8), binary (base 2)
> - (float) Bilangan pecahan
> 
> Underscore (_) dapat ditambahkan untuk memudahkan pembacaan angka dalam kode program PHP.
> 
> Untuk angka negatif, kita bisa menggunakan tanda - (minus) di depan angka.
>
> Berikut kode Tipe Data Integer :
> 
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/e8da8c63-9458-46ce-adcf-897c0dc58182)
---
> Berikut kode Tipe Data Floating Point :
> - Floating-point dalam PHP menggunakan titik (.) untuk menambahkan koma, dan dapat menggunakan notasi ilmiah (contoh: E3) untuk angka besar atau kecil.
> 
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/247e8fc3-386d-4d3b-aa36-cbfb4f425472)
---
> #### INTEGER OVERFLOW
> - Secara default, kapasitas integer di PHP ada batasnya, 2147483647 untuk sistem operasi 32 bit, dan 9223372036854775807 untuk sistem operasi 64 bit
> - Jika kita membuat number integer yang melebihi nilai tersebut, maka secara otomatis tipe numbernya akan berubah menjadi floating point.
> Berikut kode Interget Overflow :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/8477acf1-93da-48d1-9ce6-567c28d85480)
---
> #### TIPE DATA BOOLEAN
> - Tipe data boolean adalah tipe data paling sederhana di PHP
> - Tipe data boolean dalam PHP hanya memiliki dua nilai, yaitu true atau false, dan bersifat case-insensitive.
>
> Berikut kode Tipe Data Boolean :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/7132e5c1-bded-4f6a-8381-0156b10a4566)
---
> #### TIPE DATA STRING
> - Tipe data string adalah representasi dari teks atau tulisan dalam PHP dan dapat mengandung kosong atau banyak karakter.
>   
> Berikut kode tipe data string single quote :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/29f40fc3-2ce4-4a15-baec-775bcda98db2)
>
> - Selain single quote, kita juga bisa menggunakan double quote. Salah satu kelebihan menggunakan double quote adalah kita menggunakan escape sequence untuk beberapa hal, seperti \n untuk ENTER, \t untuk TAB, " untuk double quote, dan lain-lain
>
> Berikut kode tipe data string double quote :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/e15253a7-3356-4475-b3bd-a7f45c808f35)
---
> #### Multiline String
> - Kadang kita ingin membuat data string yang lebih dari satu baris. Untuk melakukan itu sebenarnya kita bisa menggunakan \n sebagai ENTER
> - Namun PHP memiliki fitur yang lebih baik, yaitu bernama Heredoc dan Nowdoc.
>
> #### HERODOC
> - Heredoc adalah fitur untuk membuat String yang panjang, sehingga kita tidak perlu manual melakukan enter, tab dan yang lain-lain secara manual
> 
> Berikut kode tipe data string Heredoc :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/25227e18-1a73-439d-9591-06843d250ba7)
>
> #### NOWDOC
> - Nowdoc mirip seperti Heredoc, yang membedakan adalah pada Nowdoc tidak memiliki kemampuan parsing seperti di Heredoc atau Double Quote.
>
> Berikut kode tipe data string Nowdoc :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/c3b65d0f-c8c4-4486-84cc-567a0332ba39)
---
> #### VARIABLE
> - Variabel di PHP dapat diubah tipe datanya secara dinamis, seperti dari string menjadi integer.
> - Penamaan variable tidak boleh mengandung spasi
>
> Berikut kode variable :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/803ad324-8b68-4857-b943-ae4aa7566557)
>
> #### VARIABLE VARIABLES
> - PHP memiliki kemampuan variable variables, yaitu membuat variable dari string value variable
> - Untuk membuat variable dari value variable kita bisa menggunakan $$ diikuti dengan nama variable nya
>
> Berikut kode variable variables :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/6252c567-3587-4101-a953-a26aa1b6268a)
---
> #### CONSTANT
> - Variabel di PHP memiliki sifat mutable, artinya bisa diubah nilainya. Constant, di sisi lain, memiliki sifat immutable, yang artinya nilainya tidak bisa diubah setelah deklarasi.
> - Untuk membuat constant kita bisa menggunakan function define()
> - Best practice pembuatan nama constant adalah menggunakan UPPER_CASE
>
> Berikut kode constant :
> 
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/c3d2034f-c7bb-43c7-918c-8d75d5e4839d)
---
> #### DATA NULL
> - Null dalam PHP digunakan untuk merepresentasikan sebuah variabel tanpa nilai. Penggunaan is_null() dapat digunakan untuk mengecek apakah sebuah variabel kosong atau null.
> - Untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case insensitive)
>
> Berikut kode null :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/16070c62-c232-494e-adab-f49414d07428)
>
> Berikut kode untuk mengecek null :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/64fa8b14-4537-41ba-971a-8fe2730d58ef)
>
> #### MENGHAPUS VARIABLE
> - Function unset() digunakan untuk menghapus variabel dalam PHP. Namun hati-hati, variabel yang dihapus dengan unset() tidak bisa lagi diakses dan bahkan tidak dapat diketahui keberadaannya menggunakan is_null().
> - Penggunaan isset lebih aman daripada is_null untuk memeriksa apakah variabel ada dan nilainya tidak nol.
> 
> Berikut kode untuk menghapus variable dan isset :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/61b9cb5f-2e15-4a3c-ba6a-ee5fff16ce9a)
---
> #### TIPE DATA ARRAY
> - Tipe data array di PHP memungkinkan untuk menyimpan kumpulan data dengan jenis yang berbeda-beda.
> - Array di PHP memiliki panjang yang dinamis, memungkinkan penambahan data sebanyak-banyaknya tanpa batasan.
> - Array dapat dibuat menggunakan kata kunci array atau kurung kotak, dengan fleksibilitas dalam jenis data yang dimasukkan.
>
> Berikut kode untuk membuat array :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/8fc0317d-77ea-4a82-a54a-5d76ce33ad3a)
>
> #### OPERASI ARRAY
> - Operasi umum pada array meliputi mengakses, mengubah, menambah, dan menghapus data menggunakan indeks.
>
> Berikut kode operasi array :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/8722d4e6-4b76-4396-bd12-48bb7464a311)
>
> #### ARRAY SEBAGAI MAP
> - Di banyak bahasa pemrograman, terdapat tipe data bernama Map, yaitu asosiasi antara key dan value.
> - Namun di PHP, Map dapat dibuat menggunakan Array.
> - secara default, Array akan menggunakan indeks (nomor) sebagai key dan value-nya, dan Anda bebas memasukkan data ke dalam Array.
> - Namun Jika Anda ingin, Anda juga dapat mengubah indeks-nya menjadi tipe data lain, seperti string, yang membuat Array di PHP mirip dengan Map di bahasa pemrograman lain.
>
> Berikut kode membuat map :
> 
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/42c7fe17-cd9c-47b0-b49e-73afb9f6c181)
>
> #### ARRAY DALAM ARRAY
> - Seperti dijelaskan di awal, Array di PHP bisa berisikan data apapun
> - Sehingga kita juga bisa membuat array di dalam array jika memang dibutuhkan
>
> Berikut kode array di dalam array :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/b389ebfa-6884-48fe-bc01-52c408d13ff0)
---
> #### OPERATOR ARITMATIKA
> - Operator aritmatika di PHP mendukung operasi matematika dasar seperti penambahan, pengurangan, perkalian, pembagian, sisa bagi, dan perpangkatan.
>
> Berikut kode operator aritmatika :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/884be802-db1c-416c-86d3-cc23134f0daa)
>
> #### OPERATOR PENUGASAN
> - Operator penugasan di PHP, seperti +=, dapat digunakan untuk operasi aritmatika yang singkat dan mempersingkat penulisan kode.
>
> Berikut kode operator penugasan :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/b04a589f-db31-44c3-b027-7d40bdd02bdc)
>
> #### OPERATOR PERBANDINGAN
> -  Operator perbandingan di PHP digunakan untuk membandingkan nilai atau tipe data, mengembalikan nilai true jika perbandingannya benar dan false jika salah.
> -  Contoh penggunaan operator perbandingan seperti ```==```, ```===```, ```<```, ```<=```, ```>```, dan ```>=``` untuk membandingkan nilai atau tipe data di PHP.
>
> Berikut operator perbandingan :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/10fbbfdc-d6ae-45bb-9d63-e30245986a21)
>
> #### OPERATOR LOGIKA
> - Operator logika di PHP digunakan untuk membandingkan dua nilai boolean.
> - Operator ! (not) digunakan untuk membalikkan nilai boolean.
> - Operator xor digunakan untuk memeriksa apakah salah satu dari dua kondisi benar, tetapi tidak keduanya.
>
> Berikut kode operator logika :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/882631f7-d661-4076-9753-75225a70ee4e)
>
> #### INCREMENT DAN DECREMENT
> - PHP mendukung operator increment dan decrement seperti dalam bahasa pemrograman C untuk menaikkan atau menurunkan nilai angka.
>
> Berikut kode increment dan decrement :
> 
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/7dc601f3-71a5-4a5c-92eb-0161ebd27111)
>
> #### OPERATOR ARRAY
> - PHP memiliki operator khusus untuk array, seperti operator ```+``` untuk menggabungkan dua array.
> - Operator equality (```==```) memeriksa apakah nilai dan posisi elemen dalam dua array sama.
> - Operator inequality (```!=```) memeriksa apakah dua array tidak sama.
>
> Berikut kode operator array (1) :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/dc8178e9-8bdd-4e96-ab81-4ba8ae117dc9)
>
> Berikut kode operator array (2) :
> 
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/25a537e3-ebe4-4ac8-bdaa-fe85049ebf6d)
---
> #### EXPRESSION
> - Expression statement adalah bagian penting dalam PHP, di mana hampir semua kode yang ditulis adalah sebuah expression.
>
> Berikut kode expression complex :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/311a88bc-1b93-4045-9803-26c275764c29)
>
> #### STATEMENT
> - Statement adalah kalimat lengkap dalam bahasa pemrograman, diakhiri dengan titik koma, seringkali terdiri dari satu atau lebih expression.
>
> Berikut kode statement :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/e49b8299-7bf7-4fb4-8af5-28ad6000b2cf)
>
> #### BLOCK
> -  Block adalah kumpulan statement yang diawali dan diakhiri dengan kurung kurawal, bisa berisi nol atau lebih statement.
>
> Berikut kode block :
> 
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/49479d62-ab67-4adf-a62f-7c19ed90f1c3)
---
> ### MANIPULASI STRING
>
> #### Dot Operator
> - Dot operator (titik) digunakan untuk menggabungkan string dengan data lain, lebih disarankan daripada menggunakan operator + untuk menghindari masalah konversi tipe data.
>
> Berikut kode dot operator :
> 
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/1599f1a2-414e-4aa4-b31a-c756d27f748f)
>
> #### KONVERSI KE NUMBER DAN SEBALIKNYA
> - Konversi antara tipe data string dan number cukup mudah dalam PHP dengan menggunakan tanda kurung dan tipe data yang diinginkan.
>
> Berikut kode konversi ke number :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/d7a5c213-e159-4c1e-b02a-7e135f91cc26)
>
> #### MENGAKSES KARAKTER
> -  Karakter dalam string bisa diakses menggunakan indeks, dimulai dari 0, mirip dengan array.
>
> Berikut kode mengakses karakter :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/be76eba1-f3a8-4ab3-afe6-b1a424c6a34c)
>
> #### VARIABLE PARSING
> - Variabel parsing memungkinkan penggunaan variabel dalam string dengan menggunakan tanda dollar ($) diikuti oleh nama variabelnya, khusus dalam double quotes atau heredoc.
>
> Berikut kode variable parsing :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/4789ee61-2bbf-4fed-83af-f982369d91a4)
>
> #### CURLY BRACE
> -  Untuk menggabungkan variabel dengan string tanpa spasi, kurung kurawal bisa digunakan sebelum variabel parsing, diikuti oleh variabel tersebut.
>
> Berikut kode curly brace :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/ded6c823-2991-4334-8998-c82efa2fbece)
---
> #### IF STATEMENT
> - Pada percabangan, kita dapat mengeksekusi kode program berdasarkan kondisi yang terpenuhi menggunakan if statement.
> - Di PHP, if statement dapat memiliki blok kode dengan atau tanpa kurung kurawal, tergantung pada kebutuhan.
>
> Berikut kode if statement :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/6792f71a-aefe-4107-b950-1b97a728272c)
>
> #### ELSE STATEMENT
> - Blok if akan dieksekusi ketika kondisi if bernilai true
> - kadang kita ingin melakukan eksekusi program tertentu jika kondisi if bernilai false
> - hal ini bisa dilakukan menggunakan else statement
>
> Berikut kode elses statement :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/bf9ca019-91c2-4e73-976a-17f9d661a45a)
>
> #### ELSE IF STATEMENT
> - penggunaan if statement untuk mengecek multiple kondisi dengan menggunakan else if (elseif) statement.
> - Kasus seperti ini, di PHP kita bisa menggunakan Else if statement
> - Else if di PHP bisa lebih dari satu
> - Kode Else if di php bisa menggunakan "else if" atau elseif (digabung)
>
> Berikut kode else if statement :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/38e0d1c2-d624-488e-b029-433bed432449)
>
> Berikut kode else if statement dengan colon :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/1e1f276f-6822-4c4b-8017-4b74b5caa9e7)
>
> #### SWITCH STATEMENT
> - Switch statement digunakan untuk percabangan sederhana yang hanya membandingkan nilai variabel dengan nilai-nilai tertentu.
> - Switch statement lebih disarankan jika hanya menggunakan perbandingan sama dengan (==) karena lebih sederhana dan mudah dipahami.
>
> Berikut kode switch statement :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/17e65d0c-725b-4121-8561-2991a7a501fd)
>
> Berikut kode syntax alternative :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/0506bd39-d1b4-44be-8b5b-474c3fad25e9)
---
> #### TERNARY OPERATOR
> - Penggunaan ternary operator (?) untuk menyederhanakan pengecekan kondisi dan pengisian nilai variabel.
>
> Berikut kode bukan ternary operator :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/3838bc7e-2677-4a0b-8a41-ff42ecd464e3)
>
> Berikut kode ternary operator :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/8dee2f61-b296-40b9-a12f-32f53d2a8e42)
---
> #### NULL COALESCING OPERATOR
> - Penggunaan null coalescing operator (```??```) untuk mengecek dan mengisi nilai default jika data kosong.
>
> Berikut kode tanpa null coalescing operator :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/47cfc3e7-67b6-49c2-af27-4c4d4d260ee2)
---
> #### FOR LOOP
> - Syntax dan penjelasan tentang for loop untuk mengeksekusi blok kode berulang kali berdasarkan kondisi.
>
> Berikut kode for loop :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/ec87ac68-23d6-4214-8179-4aa7a75eea95)
>
> Berikut kode for loop dengan kondisi :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/7e53d886-4910-46b7-a3b8-e6c94c9a31b1)
>
> Berikut kode for loop dengan init statement :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/23375b19-939a-4fbf-962f-e14aaec0a21a)
>
> Berikut kode for loop dengan post statement :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/8a8ab8f7-c446-43f4-9d0f-48fde5853043)
>
> Berikut kode for loop dengan syntax berbeda :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/6dde8744-24a8-438b-8d28-5aa66e0cf902)'
---
> #### WHILE LOOP
> - Perkenalan tentang while loop yang lebih sederhana dengan hanya menggunakan kondisi untuk pengulangan.
>
> Berikut kode while loop :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/04146435-7803-4503-9d75-8b05ccda1f7f)
>
> Berikut kode while loop dengan syntax berbeda :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/85f6b741-b820-43f3-a8a5-81806386f116)
---
> #### DO WHILE LOOP
> - do while loop adalah perulangan yang mirip dengan while
> - perbedaan hanya pada pengecekan kondisi
> - pengecekan kondisi di whilel loop dilakukan di awal sebelum perulangan dilakukan, sedangkan di do while loop dilakukan setelah perulangan dilakukan
> - Oleh karena itu dalam do while loop, minimal pasti sekali perulangan dilakukan walaupun kondisi tidak bernilai
>
> Berikut kode do while loop :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/f53545f4-1b20-433f-bb83-0bb8cfdf7be3)
---
> #### BREAK & CONTINUE
> - Pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch
> - Sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruh perulangan.
> - Namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya
>
> Berikut kode break :
> 
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/0ff4d913-a573-4bd1-a231-0eff533c3533)
>
> Berikut kode continue :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/9532dfa1-faa8-4c98-ac49-80a317adb24b)
---
> #### FOR EACH
> - kadang kita biasa mengakses data array menggunakan perulangan
> - mengakses data array menggunakan perulangan sangat bertele-tele, kita harus membuat counter, lalu mengakses array menggunakan counter yang kita buat
> - Namun untungnya, di PHP terdapat perulangan for each, yang bisa digunakan untuk mengakses seluruh data di array secara otomatis
>
> Berikut kode tanpa for each :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/0e184652-3493-42a1-a460-f827bfbf9729)
>
> Berikut kode for each :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/873b7306-9a59-4fcd-a037-0cf8eb946292)
>
> Berikut kode for each dengan key :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/2c2c756d-7104-4431-b68b-f3a2fd5eb5e6)
---
> #### GOTO OPERATOR
> -  Penggunaan goto operator jarang disarankan karena bisa membingungkan alur program, sebaiknya dihindari kecuali dalam kasus tertentu yang sangat spesifik.
> -  Hati-hati saat menggunakan goto, karena penggunaan yang berlebihan dapat membuat kode sulit dipahami.
>
> berikut kode goto operator :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/1ec197c5-0227-4e68-954c-25762959e222)
>
> berikut kode goto operator di loop :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/195fdacd-a295-48b0-a9fb-9810fccd91c2)
---
> #### FUNCTION
> - Function adalah blok kode yang dapat dijalankan saat dipanggil dengan menggunakan nama dan argumen tertentu.
>
> Berikut kode function :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/a5523f90-886b-48b1-90d6-7968db2f6bb2)
>
> #### LOKASI FUNCTION
> - Function dalam PHP sangat fleksibel, dapat diletakkan di mana saja dalam kode, namun harus dipanggil sebelum digunakan.
>
> Berikut kode lokasi function :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/a2815ec9-d7ab-4c94-9a1e-68d703ad5a0a)
>
> #### FUNCTION ARGUMENT
> - Argumen atau parameter dapat ditambahkan ke dalam function untuk mengirim informasi ke dalamnya, bisa lebih dari satu dan dipisahkan dengan koma.
>
> Berikut kode function argument :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/ce0141a6-512f-465e-a0b0-0ec9803fe04c)
>
> #### DEFAULT ARGUMENT VALUE
> - PHP mendukung default argument value, yang memungkinkan untuk menentukan nilai default jika argumen tidak diberikan saat pemanggilan function.
>
> Berikut kode default argument value :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/7f54112e-fea9-4220-8099-6838a98f7d34)
>
> #### KESALAHAN DEFAULT ARGUMENT VALUE
> - Default argumen value disarankan ditempatkan di parameter yang belakang, bukan di depan.
>
> Berikut kode kesalahan default argument value :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/64c66eeb-409e-4a8c-9347-9a227c309510)
>
> #### TYPE DECLARATION
> - Sama seperti variable, argument di PHP bisa kita masukkan data yang dinamis
> - Kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat function yang menggunakan argument dengan tipe data tertentu
>
> Berikut kode type declaration :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/2fdcee1a-2f88-4e86-a2d1-918ff4856ad4)
>
> #### VARIABLE-LENGTH ARGUMENT LIST
> - Variable-length arguments memungkinkan penggunaan parameter yang menerima banyak nilai, dengan tanda titik-titik sebelum nama argumen.
>
> Berikut kode variable lenght argument list :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/c88fa0ff-f08d-4631-96b2-f3ab1ea073d8)
>
> #### FUNCTION RETURN VALUE
> - Fungsi dalam PHP dapat mengembalikan nilai dengan menggunakan kata kunci "return", namun hanya dapat mengembalikan satu jenis data.
> - Menggunakan kata kunci return untuk mengembalikan nilai dari sebuah fungsi.
> - Kode di bawah pernyataan return tidak akan dieksekusi, karena eksekusi langsung balik ke atas setelah menemui return.
>
> Berikut kode function return value :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/6d26b3e4-7416-44ef-9454-26b125d3414c)
>
> Berikut kode function return value (2) :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/f5871519-2ac1-40b0-81d8-fe4aad1d70f1)
>
> #### RETURN TYPE DECLARATIONS
> - Penggunaan deklarasi tipe data kembali (return type declaration) membantu dalam dokumentasi dan pencegahan kesalahan.
> - Menggunakan deklarasi tipe data kembali membantu dalam menjaga keakuratan tipe data yang dikembalikan oleh sebuah fungsi.
>
> Berikut kode return type declarations :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/f58c2bc2-6654-45cb-b8a6-9f9f62064dae)
---
> #### VARIABLE FUNCTION
> - Variabel function memungkinkan pemanggilan fungsi menggunakan nilai dari variabel.
> - Variabel function memungkinkan kita untuk menyimpan function dalam sebuah variabel dan memanggilnya dengan variabel tersebut.
>
> Berikut kode variable function :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/c6c331f3-634a-44a7-9bb3-863f5760e462)
>
> Berikut kode penggunaan variable function :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/d720f805-ba90-4357-9237-0c50114ccad3)
>
> #### ANONYMOUS FUNCTION
> -  Anonymous function (fungsi tanpa nama) atau juga dikenal sebagai closure, memungkinkan kita untuk membuat fungsi tanpa harus memberikannya nama.
>
> Berikut kode annonymous function :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/641bb1b4-1dc3-4ed9-8418-41c6cd40651d)
>
> Berikut kode anonymous function sebagai argument :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/2144c8f5-63c5-4d8b-96a9-f4b37bbd8e10)
>
> #### MENGAKSES VARIABLE DILUAR CLOSURE
> - Penjelasan tentang penggunaan use untuk mengakses variabel di luar closure atau Anonymous function.
>
> Berikut kode mengakses variable diluar :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/cafa96ec-79bc-4535-8c17-cd07c8cc3e1a)
>
> #### ARROW FUNCTION
> - Pengenalan tentang Arrow Function (Eropa Function) di PHP 7.4.
> - Perbandingan antara Anonymous Function dan Arrow Function dalam penggunaan sederhana.
>
> Berikut kode arrow function :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/61bc3fdb-0dac-447a-b0e0-ab6e41ca8789)
>
> #### CALLBACK FUNCTION
> -  Callback adalah sebuah mekanisme function memanggil function lainnya sesuai dengan yang diberikan di argument
>
> Berikut kode callback function :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/17436ecd-1229-484e-a9f1-ee49dfa80fc8)
>
> #### RECURSIVE FUNCTION
> - Recursive adalah teknik di mana sebuah fungsi memanggil dirinya sendiri.
> - Dalam recursive, perhatikan kasus dasar yang akan mengakhiri pemanggilan recursive.
>
> Berikut kode factorial loop :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/70fbe617-4431-4f3b-890d-7f0bb5c044ab)
>
> Berikut kode factorial recursive :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/fde496bf-3e22-4a01-bf55-bbfa4e54298d)
>
> #### PROBLEM DENGAN RECURSIVE
> Gunakan recursive dengan hati-hati karena dapat menyebabkan masalah overflows dan konsumsi memori yang besar.
>
> Berikut kode stackOverflow :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/91cd7214-efad-4b9e-9012-35443ab2ea4f)
---
> #### KOMENTAR
> - Komentar dalam kode program PHP penting untuk dokumentasi dan pemahaman logika.
> - Ada dua cara untuk menambahkan komentar: lebih dari satu baris menggunakan /* */, dan satu baris menggunakan //.
>
> Berikut kode komentar :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/f3090fb5-0cfd-47f6-b098-e48309a85b3a)
---
> #### STRING FUNCTION
> - Sebelumnya saya pernah menggunakan beberapa function bawaan dari PHP untuk memanipulasi data string.
>
> Berikut kode string function :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/a94cf7ea-be97-4004-bf66-9ea8392d3d01)
>
> #### ARRAY FUNCTION
> - Di PHP juga terdapat banyak sekali function bawaan yang bisa kita gunakan untuk memanipulasi data array
>
> berikut kode array function :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/8f467e64-a518-4611-8bbf-e5e63a47fca2)
>
> #### IS FUNCTION
> - Function is_ pada PHP digunakan untuk mengecek tipe data variabel.
>
> Berikut kode is function :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/df0fc697-a0a6-40ea-bc3d-ae4b553d3f2d)
---
> #### REQUIRE DAN INCLUDE
> - require dan include digunakan untuk mengambil file PHP lain dalam aplikasi, dengan perbedaan bahwa require akan menyebabkan error dan menghentikan program jika file tidak ditemukan, sedangkan include hanya memberikan peringatan tetapi program tetap berlanjut.
> - Menggunakan include_once atau require_once memastikan bahwa file yang sama hanya diambil sekali untuk menghindari redeclare function error.
>
> Berikut kode include :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/25bbdec9-6b6f-4952-b245-d2021556f9fc)
---
> #### VARIABLE SCOPE
> - Variabel di PHP memiliki tiga jenis scope: Global, Lokal, dan Static.
>
> Berikut kode variable global :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/5bb7cdee-e917-45b0-8193-9847f6efc950)
>
> #### LOCAL SCOPE
> - Variabel Lokal dideklarasikan di dalam fungsi dan hanya dapat diakses dari dalam fungsi tersebut.
>
> Berikut kode local scope :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/7331e02e-6e39-4c52-8925-65162d717679)
>
> #### STATIC SCOPE
> - Variabel Static memiliki siklus hidup yang berlanjut di antara panggilan fungsi.
>
> Berikut kode static scope :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/bf497cce-1a3d-4931-9bae-bf4f5b4c9da8)
---
> #### REFERENCE
> - Reference dalam PHP memungkinkan akses ke variabel yang sama dengan nama yang berbeda.
Referensi dibuat dengan menggunakan karakter &.
>
> Berikut kode assign by refrence :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/16db92d5-b0b7-4d48-be06-c3b2e0e256fe)
>
> Berikut kode pass by refrence :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/1e1b081c-a842-490b-a691-9c6123eb62b1)
>
> #### RETURNING REFRENCES
> - PHP mendukung returning reference, yang memungkinkan fungsi mengembalikan nilai sebagai reference.
>
> Berikut kode returning refrences :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/e042bcbe-5096-46aa-bb23-369266c8cf1c)
---
<p align="center" >
  <b>PERTANYAAN DAN CATATAN TAMBAHAN</b>
</p>

---

> - Mungkin agak lama untuk menghafal sebagian kodenya

---

<p align="center" >
  <b>KESIMPULAN</b>
</p>

---

> - fungsi utama PHP adalah untuk membangun situs web yang dinamis. Dengan PHP, kamu dapat membuat halaman web yang dapat berinteraksi dengan pengguna, menampilkan konten yang berubah secara real-time, dan mengakses basis data untuk mengambil atau menyimpan informasi.



































































































