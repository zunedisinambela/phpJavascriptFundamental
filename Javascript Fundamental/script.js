//TODO Perulangan Angkot
// var jmlAngkot = 10;
// var noAngkot = 1;

// while (noAngkot <= jmlAngkot) {
//     console.log(`Angkot No. ${noAngkot} beroperasi dengan baik.`);
//     noAngkot++;
// }



//TODO Perulangan Angkot 2
// var jmlAngkot = 10;
// var angkotBeroperasi = 9;
// var noAngkot = 1;

// while (noAngkot <= angkotBeroperasi) {
//     console.log(`Angkot No. ${noAngkot} beroperasi dengan baik.`);
//     noAngkot++;
// }

// for (noAngkot = angkotBeroperasi + 1; noAngkot <= jmlAngkot; noAngkot++) {
//     console.log(`Angkot No. ${noAngkot} sedang tidak beroperasi`);
// }



//TODO Perulangan Angkot 3
// var jmlAngkot = 10;
// var angkotBeroperasi = 7;

// for (var noAngkot = 1; noAngkot <= jmlAngkot; noAngkot++) {
//     if (noAngkot <= angkotBeroperasi) {
//         console.log(`Angkot No. ${noAngkot} beroperasi dengan baik`);
//     } else {
//         console.log(`Angkot No. ${noAngkot} sedang tidak beroperasi`);
//     }
// }



//TODO Perulangan Angkot 4
// var jmlAngkot = 10;
// var angkotBeroperasi = 6;

// for (var noAngkot = 1; noAngkot <= jmlAngkot; noAngkot++) {
//     if (noAngkot <= 6 && noAngkot !== 5) {
//         console.log(`Angkot No. ${noAngkot} beroperasi dengan baik`);
//     } else if (noAngkot === 8 || noAngkot === 10 || noAngkot === 5) {
//         console.log(`Angkot No. ${noAngkot} sedang lembur.`);
//     } else {
//         console.log(`Angkot No. ${noAngkot} sedang tidak berfungsi`);
//     }
// }



// var s = '';
// for (var i = 0; i < 5; i++) {
//     for (var j = 0; j <= i; j++) {
//         s += '*';
//     }
//     s += '\n';
// }
// console.log(s);



// var s = '';
// for (var i = 5; i > 0; i--) {
//     for (var j = 0; j < i; j++) {
//         s += '*';
//     }
//     s += '\n';
// }
// console.log(s);



// var tanya = true;
// while (tanya) {
    // Menangkap pilihan player
//     var p = prompt('pilih: gajah, semut, orang');

    // Menangkap pilihan comuter
    // Membangkitkan bilangan random
//     var comp = Math.random();

//     if (comp < 0.34) {
//         comp = 'gajah';
//     } else if(comp >= 0.34 && comp < 0.67) {
//         comp = 'orang';
//     } else {
//         comp = 'semut';
//     }

//     var hasil = '';
    // Menentukan rules
//     if (p == comp) {
//         hasil = 'SERI';
//     } else if( p == 'gajah'){
//         if (comp == 'orang') {
//             hasil = 'MENANG';
//         } else {
//             hasil = 'KALAH';
//         }
//         hasil = (comp == 'orang') ? 'MENANG' : 'KALAH';
//     } else if( p == 'orang') {
//         hasil = (comp == 'gajah') ? 'KALAH' : 'MENANG';
//     } else if ( p == 'semut') {
//         hasil = (comp == 'orang') ? 'KALAH' : 'MENANG';
//     } else {
//         hasil = 'Memasukkan pilihan yang salah';
//     }

    // Tampilkan hasilnya
//     alert(`Kamu memilih ${p} dan komputer memilih: ${comp} \n maka hasilnya: kamu ${hasil}`);

//     tanya = confirm('Apakah mau main lagi?');
// }



//TODO Fungsi
// function jumlahVolumeKubus(a, b) {
//     var volumeA, volumeB, total;

//     volumeA = a * a * a;
//     volumeB = b * b * b;

//     total = volumeA + volumeB;

//     return total;
// }

// console.log(jumlahVolumeKubus(8, 3));
// console.log(jumlahVolumeKubus(10, 15));



//TODO Fungsi 2
// function tambah(a, b) {
//     return a + b;
// }

// var a = parseInt(prompt('Masukkan nilai 1 :'));
// var a = parseInt(prompt('Masukkan nilai 2 :'));
// var hasil = tambah(a*2, b*2);
// console.log(hasil);



//TODO Fungsi 3
// function tambah(a, b) {
//     return a + b;
// }

// function kali(a, b) {
//     return a * b;
// }

// var hasil = kali(tambah(1, 2), tambah(3, 4));
// console.log(hasil);



//TODO Fungsi 4
// function tambah() {
//     var hasil = 0;
//     for (var i = 0; i < arguments.length; i++) {
//         hasil += arguments[i];
//     }
//     return hasil;
// }

// console.log(tambah(1, 2, 3, ` Hi`));



//TODO Refactoring
// function jumlahVolumeDuaKubus(a, b) {
//     return a * a * a + b * b * b;
// }
// alert(jumlahVolumeDuaKubus(8, 3));



//TODO Variable Scope
// var a = 1;
// function tes(a) {
//     console.log(a);
// }
// tes(a);
// console.log(a);



//TODO Rekursif 1
// function cetakAngka(n) {
//     if (n === 0) {
//         return;
//     }
//     console.log(n);
//     cetakAngka(n-1);
// }
// cetakAngka(10);



//TODO Rekursif 2
// function faktorial(n) {
//     if (n === 0) return 1;
//     return n * faktorial(n-1);
// }
// console.log(faktorial(5));



//TODO Manipulasi Array
// 1. Menambah isi array
// var arr = [];
// arr[0] = "Zunedi";
// arr[1] = "Suprianto";
// arr[2] = "Kresna";
// arr[3] = "Doddy";

// console.log(arr);

//TODO 2. Menghapus isi array
// var arr = ["Zunedi", "Suprianto", "Doddy"];
// arr[1] = undefined;
// console.log(arr);

//TODO 3. Menampilkan isi array
// var arr = ["Zunedi", "Krena", "Anggoro"];

// for (var i = 0; i < arr.length; i++) {
//     console.log(`Mahasiswa ke- ${i+1} ${arr[i]}`);
// }

// Method pada array
//TODO 1. join => merubah menjadi string
var arr = ['zunedi', 'kresna', 'anggoro'];
// console.log(arr.join(' - '));

//TODO 2 . push
// arr.push('Doddy', 'Daniel'); //! Menambahkan elemen di akhir
//TODO 3. pop
// arr.pop(); //! Menghapus elemen di akhir
// console.log(arr.join(' - '));

//TODO 3. unshift
// arr.unshift('Doddy'); //! Menambahkan elemen di awal
//TODO 4. shift
// arr.shift(); //! Menambahkan elemen di awal
// console.log(arr.join(' - '));

//TODO 5. splice
//? splice(indexAwal, mauDihapusBerapa, elemenBaru1, elemenBaru2, ...)
// arr.splice(1, 2, 'Zuanto', 'Daniel'); //! Menyisipkan elemen di tengah-tengah
// console.log(arr.join(' - '));
//TODO 6. slice
//? slice(awal, akhir);
var arr2 = ['Zuveri', 'Zuanto', 'Zunedi', 'Daniel', 'Sinambela'];
var arr3 = arr2.slice(1,4); //! Menghapus elemen
// console.log(arr2.join(' - '));
// console.log(arr3.join(' - '));


//TODO: foreach
// var angka = [1,2,3,4,5,6,7,8];

// angka.forEach(function (e) {
//     console.log(e);
// });

// var nama = ['Anggoro', 'Ike', 'Kresna', 'Firman'];
// nama.forEach(function (e, i) {
//     console.log(`Mahasiswa ke- ${i+1} adalah: ${e}`);
// });

//TODO: map
// var angka2 = [1,2,5,3,6,8,4];
// var angka3 = angka2.map(function (e) {
//     return e * 2;
// });
// console.log(angka3.join('-'));

//TODO: sort
// var angka2 = [1,2,10,5,20,3,6,8,4];
// angka2.sort(function (a, b) {
//     return a-b;
// });
// console.log(angka2.join(' - '));

//TODO: filter
// var angka2 = [1,2,10,5,20,3,6,8,4];
// var angka3 = angka2.filter(function (x) {
//     return x > 5;
// });
// console.log(angka3.join(' - '));

//TODO: find
// var angka2 = [1,2,10,5,20,3,6,8,4];
// var angka3 = angka2.find(function (x) {
//     return x > 5;
// });
// console.log(angka3);

//? materi pembelajaran



//TODO: Juragan Angkot Pengelolaan Penumpang
// var penumpang = [];
// var tambahPenumpang = function (namaPenumpang, penumpang) {
//     //? jika penumpang angkot kosong
//     if ( penumpang.length == 0) {
//         //? tambah penumpang di awal array
//         penumpang.push(namaPenumpang);
//         //? kembalikan isi array & keluar dari function
//         return penumpang;
//     } else {
//         //? telusuri seluruh kursi dari awal
//         for( var i = 0; i < penumpang.length; i++) {
//             //? jika ada kursi kosong
//             if ( penumpang[i] == undefined) {
//                 //? tambah penumpang di kursi tersebut
//                 penumpang[i] = namaPenumpang;
//                 //? kembalikan isi array & keluar dari function
//                 return penumpang;
//             }
//             //? jika sudah ada nama yang sama
//             else if( penumpang[i] == namaPenumpang) {
//                 //? tampilkan pesan kesalahannya
//                 console.log(`${ namaPenumpang } sudah ada di dalam angkot.`);
//                 //? kembalikan isi array & keluar dari function
//                 return penumpang;
//             }
//             //? jika seluruh kursi terisi
//             else if( i == penumpang.length - 1) {
//                 //? tambah penumpang di akhir array
//                 penumpang.push(namaPenumpang);
//                 //? kembalikan isi array & keluar dari function
//                 return penumpang;
//             }
//         }
//     }
// }

// var hapusPenumpang = function (namaPenumpang, penumpang) {
//     if ( penumpang.length == 0) {
//         console.log(`Angkot masih kosong`);
//         return penumpang;
//     } else {
//         for( var i = 0; i < penumpang.length; i++){
//             if ( penumpang[i] == namaPenumpang) {
//                 penumpang[i] = undefined;
//                 return penumpang;
//             } else if( i == penumpang.length - 1) {
//                 console.log(`${namaPenumpang} tidak ada di dalam angkot.`);
//                 return penumpang;
//             }
//         }
//     }
// }



//TODO: object literal
// var mhs1 = {
//     nama: 'Zunedi',
//     nim: '2016420094',
//     email: 'zuned@mail.com',
//     jurusan: 'informatika'
// }

// var mhs2 = {
//     nama: 'Sinambela',
//     nim: '2016420088',
//     email: 'sinambela@mail.com',
//     jurusan: 'informatika'
// }


//TODO: function declaration
// function buatObjectMahasiswa(nama, nim, email, jurusan) {
//     var mhs = {};
//     mhs.nama = nama;
//     mhs.nim = nim;
//     mhs.email = email;
//     mhs.jurusan = jurusan;
//     return mhs;
// }
// console.log(buatObjectMahasiswa('Zunedi', '2016420094', 'zunedi@mail.com', 'Teknik Informatika'));


//TODO: constructor
// function Mahasiswa(nama, nim, email, jurusan) {
//     //? apabila menggunakan constructor sudah di buatkan oleh js var this = {}
//     this.nama = nama;
//     this.nim = nim;
//     this.email = email;
//     this.jurusan = jurusan;
//     //? return this;
// }
// var mhs3 = new Mahasiswa('Erik', '09201920', 'erik@mail.com', 'Teknik Elektro');
// console.log(mhs3);



//TODO: latihan object membuat object angkot

function Angkot(supir, trayek, penumpang, kas) {
    this.sopir = sopir;
    this.trayek = trayek;
    this.penumpang = penumpang;
    this.kas = kas;
}

var angkot1 = new Angkot('Zunedi', ['Mojokerto', 'Surabaya'], [], 0);
var angkot1 = new Angkot('Sinambela', ['Mojokerto', 'Malang'], [], 0);
