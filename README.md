# steganometrographia-php-hu

## Egyszerű latin versgenerátor és szövegtitkosító.

### Az oldalról
A honlap Melchias Uken [Steganometrographia, sive Artificium novum & inauditum](https://archive.org/details/steganometrogra00ukengoog) című 1751-ben megjelent könyve alapján készült. A könyv egy steganometrographia nevű rejtjelező eljárást ismertet, aminek a segítségével rövid üzeneteket lehet latin disztichonokba rejteni. Az alapelve, hogy az ABC betűihez félsorokat rendel. A könyvben található táblázatok segítségével ki lehet keresni az üzenet betűihez tartozó verssordarabokat. A végeredmény egy latin nyelvű disztichonos költemény, ami témáját tekintve egy verses levél, de közben ott lapul benne a titkos üzenet. A levél címzettje, ha szintén rendelkezik a könyvvel, könnyen dekódolhatja az üzenetet. Ezzel az oldallal ezt a folyamatot lehet könnyebben, gyorsabban és egyszerűbben elvégezni. Ezen kívül véletlenszerűen is lehet verset generálni.

### Radom versgenerálás
Ahhoz, hogy a program véletlenszerűen generáljon egy verset, ki kell jelölni a "random" opciót, majd megnyomni a "Verset!" gombot. Az opció melletti legördülő listából kiválasztható a generált vers hossza. Maximum 22 soros vers generálható.

### Rövid üzenet kódolása versben
A könyv eredetileg rövid üzenetek rejtjelezésére íródott. Ezt az oldallal is el lehet végezni Ilyenkor ki kell jelölni a "kódol" opciót és a mellette lévő mezőbe írni a kódolandó üzenetet, majd megnyomni a "Verset!" gombot. Csak betűket lehet kódolni és maximum 44 betű hosszúságú szöveg kódolható.

### Kódolt vers dekódolása
Az előző folyamat megfordítása. A verset a nagy mezőbe kell bemásolni, majd megnyomni a "Verset!" gombot. A dekódolt üzenetben nincsenek szóközök és teljesen nagybetűs.

### Betűk
Melchias Uken eredetileg a német nyelvterületre szánta a könyvet, ezért az alábbi betűk titkosíthatóak:  
A, B, C, D, E, F, G, H, I, K, L, M, N, O, P, Q, R, S, T, V, W, X,
