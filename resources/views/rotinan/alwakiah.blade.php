@extends('layouts.app')

@section('content')

<link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">

<style>
  body {
    font-family: 'Inter', sans-serif;
    background: #fafafa;
    color: #222;
    line-height: 1.9;
  }

  .wrap-Al-waqiah {
    padding: 40px 12%;
  }

  h1 {
    text-align: center;
    margin-bottom: 40px;
    color: #166534;
    font-weight: 600;
  }

  .ayat {
    margin-bottom: 35px;
    padding-bottom: 20px;
    border-bottom: 1px solid #ddd;
  }

  .arab {
    font-family: 'Scheherazade New', serif;
    font-size: 38px;
    direction: rtl;
    text-align: right;
    color: #111;
  }

  .latin {
    font-style: italic;
    font-size: 16px;
    color: #444;
    margin-top: 8px;
  }

  .terjemahan {
    font-size: 17px;
    margin-top: 6px;
    color: #333;
  }

  .nomor {
    display: inline-block;
    background: #16a34a;
    color: white;
    border-radius: 50%;
    width: 28px;
    height: 28px;
    text-align: center;
    line-height: 28px;
    margin-left: 10px;
    font-size: 14px;
  }
</style>
<div class="wrap-Al-waqiah">

<h1>سُورَةُ الْوَاقِعَة</h1>

<!-- Bismillah -->
<div class="ayat">
  <div class="arab">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</div>
  <div class="latin">bismillāhir-raḥmānir-raḥīm</div>
  <div class="terjemahan">Dengan nama Allah Yang Maha Pengasih, Maha Penyayang</div>
</div>

<div class="ayat">
  <div class="arab">إِذَا وَقَعَتِ الْوَاقِعَةُ <span class="nomor">١</span></div>
  <div class="latin">idhā waqa‘atil-wāqi‘ah</div>
  <div class="terjemahan">Apabila terjadi hari Kiamat,</div>
</div>

<div class="ayat">
  <div class="arab">لَيْسَ لِوَقْعَتِهَا كَاذِبَةٌ <span class="nomor">٢</span></div>
  <div class="latin">laisa liwaq‘atihā kādzibah</div>
  <div class="terjemahan">tidak seorang pun dapat berdusta tentang kejadiannya.</div>
</div>

<div class="ayat">
  <div class="arab">خَافِضَةٌ رَّافِعَةٌ <span class="nomor">٣</span></div>
  <div class="latin">khāfiḍatur-rāfi‘ah</div>
  <div class="terjemahan">(Kiamat itu) merendahkan (sebagian) dan meninggikan (sebagian lainnya).</div>
</div>

<div class="ayat">
  <div class="arab">إِذَا رُجَّتِ الْأَرْضُ رَجًّا <span class="nomor">٤</span></div>
  <div class="latin">idhā rujjatil-arḍu rajjā</div>
  <div class="terjemahan">Apabila bumi diguncangkan dengan guncangan yang dahsyat,</div>
</div>

<div class="ayat">
  <div class="arab">وَبُسَّتِ الْجِبَالُ بَسًّا <span class="nomor">٥</span></div>
  <div class="latin">wa bussatil-jibālu bassā</div>
  <div class="terjemahan">dan gunung-gunung dihancurkan sehancur-hancurnya,</div>
</div>

<div class="ayat">
  <div class="arab">فَكَانَتْ هَبَاءً مُّنبَثًّا <span class="nomor">٦</span></div>
  <div class="latin">fakānat habā’am munbathsā</div>
  <div class="terjemahan">maka jadilah ia debu yang berterbangan,</div>
</div>

<div class="ayat">
  <div class="arab">وَكُنتُمْ أَزْوَاجًا ثَلَاثَةً <span class="nomor">٧</span></div>
  <div class="latin">wa kuntum azwājan tsalātsah</div>
  <div class="terjemahan">dan kamu menjadi tiga golongan,</div>
</div>

<div class="ayat">
  <div class="arab">فَأَصْحَابُ الْمَيْمَنَةِ مَا أَصْحَابُ الْمَيْمَنَةِ <span class="nomor">٨</span></div>
  <div class="latin">fa-aṣḥābul-maimanati mā aṣḥābul-maimanah</div>
  <div class="terjemahan">Golongan kanan, alangkah mulianya golongan kanan itu!</div>
</div>

<div class="ayat">
  <div class="arab">وَأَصْحَابُ الْمَشْئَمَةِ مَا أَصْحَابُ الْمَشْئَمَةِ <span class="nomor">٩</span></div>
  <div class="latin">wa aṣḥābul-mas’amatī mā aṣḥābul-mas’amah</div>
  <div class="terjemahan">Golongan kiri, alangkah sengsaranya golongan kiri itu!</div>
</div>

<div class="ayat">
  <div class="arab">وَالسَّابِقُونَ السَّابِقُونَ <span class="nomor">١٠</span></div>
  <div class="latin">was-sābiqūnas-sābiqūn</div>
  <div class="terjemahan">Dan orang-orang yang paling dahulu (beriman), merekalah yang paling dahulu (masuk surga).</div>
</div>

<div class="ayat">
  <div class="arab">أُولَٰئِكَ الْمُقَرَّبُونَ <span class="nomor">١١</span></div>
  <div class="latin">ulā’ikal-muqarrabūn</div>
  <div class="terjemahan">Merekalah orang-orang yang dekat (kepada Allah).</div>
</div>

<div class="ayat">
  <div class="arab">فِي جَنَّاتِ النَّعِيمِ <span class="nomor">١٢</span></div>
  <div class="latin">fī jannātin-na‘īm</div>
  <div class="terjemahan">berada di dalam surga penuh kenikmatan,</div>
</div>

<div class="ayat">
  <div class="arab">ثُلَّةٌ مِّنَ الْأَوَّلِينَ <span class="nomor">١٣</span></div>
  <div class="latin">tsullatum minal-awwalīn</div>
  <div class="terjemahan">sekelompok besar dari umat terdahulu,</div>
</div>

<div class="ayat">
  <div class="arab">وَقَلِيلٌ مِّنَ الْآخِرِينَ <span class="nomor">١٤</span></div>
  <div class="latin">wa qalīlum minal-ākhirīn</div>
  <div class="terjemahan">dan sedikit dari umat yang kemudian.</div>
</div>

<div class="ayat">
  <div class="arab">عَلَىٰ سُرُرٍ مَّوْضُونَةٍ <span class="nomor">١٥</span></div>
  <div class="latin">‘alā sururim mawḍūnah</div>
  <div class="terjemahan">di atas dipan-dipan yang dihias,</div>
</div>

<div class="ayat">
  <div class="arab">مُّتَّكِئِينَ عَلَيْهَا مُتَقَابِلِينَ <span class="nomor">١٦</span></div>
  <div class="latin">muttaki’īna ‘alai-hā mutaqābilīn</div>
  <div class="terjemahan">mereka bertelekan di atasnya sambil berhadap-hadapan.</div>
</div>

<div class="ayat">
  <div class="arab">يَطُوفُ عَلَيْهِمْ وِلْدَانٌ مُّخَلَّدُونَ <span class="nomor">١٧</span></div>
  <div class="latin">yaṭūfu ‘alaihim wildānum mukhalladūn</div>
  <div class="terjemahan">Mereka dikelilingi anak-anak muda yang tetap muda,</div>
</div>

<div class="ayat">
  <div class="arab">بِأَكْوَابٍ وَأَبَارِيقَ وَكَأْسٍ مِّن مَّعِينٍ <span class="nomor">١٨</span></div>
  <div class="latin">bi-akwābin wa abārīqa wa ka’sim mim ma‘īn</div>
  <div class="terjemahan">dengan membawa gelas, kendi, dan cawan berisi minuman dari mata air,</div>
</div>

<div class="ayat">
  <div class="arab">لَا يُصَدَّعُونَ عَنْهَا وَلَا يُنزِفُونَ <span class="nomor">١٩</span></div>
  <div class="latin">lā yuṣadda‘ūna ‘anhā wa lā yunzifūn</div>
  <div class="terjemahan">mereka tidak pening karenanya dan tidak pula mabuk,</div>
</div>

<div class="ayat">
  <div class="arab">وَفَاكِهَةٍ مِّمَّا يَتَخَيَّرُونَ <span class="nomor">٢٠</span></div>
  <div class="latin">wa fākihatim mimmā yatakhayyarūn</div>
  <div class="terjemahan">dan buah-buahan dari apa saja yang mereka pilih.</div>
</div>

<div class="ayat">
  <div class="arab">وَلَحْمِ طَيْرٍ مِّمَّا يَشْتَهُونَ <span class="nomor">٢١</span></div>
  <div class="latin">wa laḥmi ṭairim mimmā yasytahūn</div>
  <div class="terjemahan">dan daging burung dari apa yang mereka inginkan.</div>
</div>

<div class="ayat">
  <div class="arab">وَحُورٌ عِينٌ <span class="nomor">٢٢</span></div>
  <div class="latin">wa ḥūrun ‘īn</div>
  <div class="terjemahan">(Mereka memperoleh) bidadari-bidadari yang bermata indah,</div>
</div>

<div class="ayat">
  <div class="arab">كَأَمْثَالِ اللُّؤْلُؤِ الْمَكْنُونِ <span class="nomor">٢٣</span></div>
  <div class="latin">ka-amṡāril-lu’lu’il-maknūn</div>
  <div class="terjemahan">laksana mutiara yang tersimpan dengan baik.</div>
</div>

<div class="ayat">
  <div class="arab">جَزَاءً بِمَا كَانُوا يَعْمَلُونَ <span class="nomor">٢٤</span></div>
  <div class="latin">jazā’am bimā kānū ya‘malūn</div>
  <div class="terjemahan">Sebagai balasan atas apa yang telah mereka kerjakan.</div>
</div>

<div class="ayat">
  <div class="arab">لَا يَسْمَعُونَ فِيهَا لَغْوًا وَلَا تَأْثِيمًا <span class="nomor">٢٥</span></div>
  <div class="latin">lā yasma‘ūna fīhā laghwan wa lā ta’ṡīmā</div>
  <div class="terjemahan">Mereka tidak mendengar perkataan sia-sia maupun yang menimbulkan dosa,</div>
</div>

<div class="ayat">
  <div class="arab">إِلَّا قِيلًا سَلَامًا سَلَامًا <span class="nomor">٢٦</span></div>
  <div class="latin">illā qīlan salāman salāmā</div>
  <div class="terjemahan">melainkan ucapan salam dan sejahtera.</div>
</div>

<div class="ayat">
  <div class="arab">وَأَصْحَابُ الْيَمِينِ مَا أَصْحَابُ الْيَمِينِ <span class="nomor">٢٧</span></div>
  <div class="latin">wa aṣḥābul-yamīni mā aṣḥābul-yamīn</div>
  <div class="terjemahan">Golongan kanan, alangkah mulianya golongan kanan itu!</div>
</div>

<div class="ayat">
  <div class="arab">فِي سِدْرٍ مَّخْضُودٍ <span class="nomor">٢٨</span></div>
  <div class="latin">fī sidrim makhḍūd</div>
  <div class="terjemahan">(Mereka berada) di antara pohon bidara yang tidak berduri,</div>
</div>

<div class="ayat">
  <div class="arab">وَطَلْحٍ مَّنضُودٍ <span class="nomor">٢٩</span></div>
  <div class="latin">wa ṭalḥim manḍūd</div>
  <div class="terjemahan">dan pohon pisang yang bersusun-susun (buahnya),</div>
</div>

<div class="ayat">
  <div class="arab">وَظِلٍّ مَّمْدُودٍ <span class="nomor">٣٠</span></div>
  <div class="latin">wa ẓillin mamdūd</div>
  <div class="terjemahan">dan naungan yang terbentang luas,</div>
</div>

<div class="ayat">
  <div class="arab">وَمَاءٍ مَّسْكُوبٍ <span class="nomor">٣١</span></div>
  <div class="latin">wa mā’im maskūb</div>
  <div class="terjemahan">dan air yang tercurah,</div>
</div>

<div class="ayat">
  <div class="arab">وَفَاكِهَةٍ كَثِيرَةٍ <span class="nomor">٣٢</span></div>
  <div class="latin">wa fākihatin katsīrah</div>
  <div class="terjemahan">serta buah-buahan yang banyak,</div>
</div>

<div class="ayat">
  <div class="arab">لَّا مَقْطُوعَةٍ وَلَا مَمْنُوعَةٍ <span class="nomor">٣٣</span></div>
  <div class="latin">lā maqṭū‘ah wa lā mamnū‘ah</div>
  <div class="terjemahan">yang tidak berhenti (berbuah) dan tidak terlarang,</div>
</div>

<div class="ayat">
  <div class="arab">وَفُرُشٍ مَّرْفُوعَةٍ <span class="nomor">٣٤</span></div>
  <div class="latin">wa furusim marfū‘ah</div>
  <div class="terjemahan">dan kasur-kasur yang ditinggikan.</div>
</div>

<div class="ayat">
  <div class="arab">إِنَّا أَنشَأْنَاهُنَّ إِنشَاءً <span class="nomor">٣٥</span></div>
  <div class="latin">innā ansya’nāhunna insyā’ā</div>
  <div class="terjemahan">Sesungguhnya Kami menciptakan mereka (bidadari-bidadari itu) dengan langsung,</div>
</div>

<div class="ayat">
  <div class="arab">فَجَعَلْنَاهُنَّ أَبْكَارًا <span class="nomor">٣٦</span></div>
  <div class="latin">faja‘alnāhunna abkārā</div>
  <div class="terjemahan">lalu Kami jadikan mereka gadis-gadis perawan,</div>
</div>

<div class="ayat">
  <div class="arab">عُرُبًا أَتْرَابًا <span class="nomor">٣٧</span></div>
  <div class="latin">‘uruban atrābā</div>
  <div class="terjemahan">penuh cinta lagi sebaya umurnya,</div>
</div>

<div class="ayat">
  <div class="arab">لِأَصْحَابِ الْيَمِينِ <span class="nomor">٣٨</span></div>
  <div class="latin">li’aṣḥābil-yamīn</div>
  <div class="terjemahan">untuk golongan kanan,</div>
</div>

<div class="ayat">
  <div class="arab">ثُلَّةٌ مِّنَ الْأَوَّلِينَ <span class="nomor">٣٩</span></div>
  <div class="latin">tsullatum minal-awwalīn</div>
  <div class="terjemahan">sekelompok besar dari umat terdahulu,</div>
</div>

<div class="ayat">
  <div class="arab">وَثُلَّةٌ مِّنَ الْآخِرِينَ <span class="nomor">٤٠</span></div>
  <div class="latin">wa tsullatum minal-ākhirīn</div>
  <div class="terjemahan">dan sekelompok besar dari umat yang kemudian.</div>
</div>

<div class="ayat">
  <div class="arab">وَأَصْحَابُ الشِّمَالِ مَا أَصْحَابُ الشِّمَالِ <span class="nomor">٤١</span></div>
  <div class="latin">wa aṣḥābusy-syimāli mā aṣḥābusy-syimāl</div>
  <div class="terjemahan">Golongan kiri, alangkah sengsaranya golongan kiri itu!</div>
</div>

<div class="ayat">
  <div class="arab">فِي سَمُومٍ وَحَمِيمٍ <span class="nomor">٤٢</span></div>
  <div class="latin">fī samūmin wa ḥamīm</div>
  <div class="terjemahan">mereka berada dalam angin panas yang membakar dan air yang mendidih,</div>
</div>

<div class="ayat">
  <div class="arab">وَظِلٍّ مِّن يَحْمُومٍ <span class="nomor">٤٣</span></div>
  <div class="latin">wa ẓillim min yaḥmūm</div>
  <div class="terjemahan">dan dalam naungan asap yang hitam,</div>
</div>

<div class="ayat">
  <div class="arab">لَّا بَارِدٍ وَلَا كَرِيمٍ <span class="nomor">٤٤</span></div>
  <div class="latin">lā bāridin wa lā karīm</div>
  <div class="terjemahan">yang tidak sejuk dan tidak menyenangkan.</div>
</div>

<div class="ayat">
  <div class="arab">إِنَّهُمْ كَانُوا قَبْلَ ذَٰلِكَ مُتْرَفِينَ <span class="nomor">٤٥</span></div>
  <div class="latin">innahum kānū qabla dzālika mutrafīn</div>
  <div class="terjemahan">Sesungguhnya mereka sebelum itu hidup bermewah-mewahan,</div>
</div>

<div class="ayat">
  <div class="arab">وَكَانُوا يُصِرُّونَ عَلَى الْحِنثِ الْعَظِيمِ <span class="nomor">٤٦</span></div>
  <div class="latin">wa kānū yuṣirrūna ‘alal-ḥinthil-‘aẓīm</div>
  <div class="terjemahan">dan mereka terus-menerus mengerjakan dosa besar.</div>
</div>

<div class="ayat">
  <div class="arab">وَيَقُولُونَ أَإِذَا مِتْنَا وَكُنَّا تُرَابًا وَعِظَامًا أَإِنَّا لَمَبْعُوثُونَ <span class="nomor">٤٧</span></div>
  <div class="latin">wa yaqūlūna a’idzā mitnā wa kunnā turāban wa ‘iẓāmā a’innā lamab‘ūṡūn</div>
  <div class="terjemahan">Mereka berkata, “Apakah setelah kami mati, menjadi tanah dan tulang belulang, kami benar-benar akan dibangkitkan?”</div>
</div>

<div class="ayat">
  <div class="arab">أَوَ آبَاؤُنَا الْأَوَّلُونَ <span class="nomor">٤٨</span></div>
  <div class="latin">aw ābā’unal-awwalūn</div>
  <div class="terjemahan">“Dan apakah nenek moyang kami yang terdahulu (juga akan dibangkitkan)?”</div>
</div>

<div class="ayat">
  <div class="arab">قُلْ إِنَّ الْأَوَّلِينَ وَالْآخِرِينَ <span class="nomor">٤٩</span></div>
  <div class="latin">qul innal-awwalīna wal-ākhirīn</div>
  <div class="terjemahan">Katakanlah, “Sesungguhnya orang-orang terdahulu dan yang kemudian,</div>
</div>

<div class="ayat">
  <div class="arab">لَمَجْمُوعُونَ إِلَىٰ مِيقَاتِ يَوْمٍ مَّعْلُومٍ <span class="nomor">٥٠</span></div>
  <div class="latin">lamajmū‘ūna ilā mīqāti yaumin ma‘lūm</div>
  <div class="terjemahan">benar-benar akan dikumpulkan pada waktu tertentu pada hari yang telah ditentukan.</div>
</div>

<div class="ayat">
  <div class="arab">ثُمَّ إِنَّكُمْ أَيُّهَا الضَّالُّونَ الْمُكَذِّبُونَ <span class="nomor">٥١</span></div>
  <div class="latin">tsumma innakum ayyuhadh-dhāllūnal-mukażżibūn</div>
  <div class="terjemahan">Kemudian, wahai orang-orang yang sesat lagi mendustakan,</div>
</div>

<div class="ayat">
  <div class="arab">لَآكِلُونَ مِن شَجَرٍ مِّن زَقُّومٍ <span class="nomor">٥٢</span></div>
  <div class="latin">laākilūna min syajarin min zaqqūm</div>
  <div class="terjemahan">sesungguhnya kamu benar-benar akan memakan pohon zaqqum,</div>
</div>

<div class="ayat">
  <div class="arab">فَمَالِئُونَ مِنْهَا الْبُطُونَ <span class="nomor">٥٣</span></div>
  <div class="latin">famāli’ūna minhāl-buṭūn</div>
  <div class="terjemahan">dan akan memenuhi perutmu dengannya.</div>
</div>

<div class="ayat">
  <div class="arab">فَشَارِبُونَ عَلَيْهِ مِنَ الْحَمِيمِ <span class="nomor">٥٤</span></div>
  <div class="latin">fasysyāribūna ‘alaihi minal-ḥamīm</div>
  <div class="terjemahan">Kemudian kamu akan meminum air yang sangat panas,</div>
</div>

<div class="ayat">
  <div class="arab">فَشَارِبُونَ شُرْبَ الْهِيمِ <span class="nomor">٥٥</span></div>
  <div class="latin">fasysyāribūna syurbal-hīm</div>
  <div class="terjemahan">maka kamu minum seperti unta yang sangat haus minum.</div>
</div>

<div class="ayat">
  <div class="arab">هَٰذَا نُزُلُهُمْ يَوْمَ الدِّينِ <span class="nomor">٥٦</span></div>
  <div class="latin">hāżā nuzuluhum yaumad-dīn</div>
  <div class="terjemahan">Itulah jamuan untuk mereka pada hari pembalasan.</div>
</div>

<div class="ayat">
  <div class="arab">نَحْنُ خَلَقْنَاكُمْ فَلَوْلَا تُصَدِّقُونَ <span class="nomor">٥٧</span></div>
  <div class="latin">naḥnu khalaqnākum falau-lā tuṣaddiqūn</div>
  <div class="terjemahan">Kami telah menciptakan kamu, maka mengapa kamu tidak membenarkan (hari kebangkitan)?</div>
</div>

<div class="ayat">
  <div class="arab">أَفَرَأَيْتُم مَّا تُمْنُونَ <span class="nomor">٥٨</span></div>
  <div class="latin">a fara-aitum mā tumnūn</div>
  <div class="terjemahan">Maka pernahkah kamu memperhatikan air mani yang kamu pancarkan?</div>
</div>

<div class="ayat">
  <div class="arab">أَأَنتُمْ تَخْلُقُونَهُ أَمْ نَحْنُ الْخَالِقُونَ <span class="nomor">٥٩</span></div>
  <div class="latin">a’antum takhluqūnahu am naḥnul-khāliqūn</div>
  <div class="terjemahan">Kamukah yang menciptakannya, atau Kami penciptanya?</div>
</div>

<div class="ayat">
  <div class="arab">نَحْنُ قَدَّرْنَا بَيْنَكُمُ الْمَوْتَ وَمَا نَحْنُ بِمَسْبُوقِينَ <span class="nomor">٦٠</span></div>
  <div class="latin">naḥnu qaddarnā bainakumul-mauta wa mā naḥnu bimasbūqīn</div>
  <div class="terjemahan">Kami telah menentukan kematian di antara kamu dan Kami tidak akan dikalahkan,</div>
</div>

<div class="ayat">
  <div class="arab">عَلَىٰ أَن نُّبَدِّلَ أَمْثَالَكُمْ وَنُنشِئَكُمْ فِي مَا لَا تَعْلَمُونَ <span class="nomor">٦١</span></div>
  <div class="latin">‘alā an nubaddila amṡālakum wa nunsyi’akum fī mā lā ta‘lamūn</div>
  <div class="terjemahan">untuk mengganti kamu dengan makhluk yang serupa dan menjadikan kamu dalam keadaan yang kamu tidak ketahui.</div>
</div>

<div class="ayat">
  <div class="arab">وَلَقَدْ عَلِمْتُمُ النَّشْأَةَ الْأُولَىٰ فَلَوْلَا تَذَكَّرُونَ <span class="nomor">٦٢</span></div>
  <div class="latin">wa laqad ‘alimtun-nasya’atal-ūlā falau-lā tadzakkarūn</div>
  <div class="terjemahan">Dan sungguh, kamu telah mengetahui penciptaan yang pertama; maka mengapa kamu tidak mengambil pelajaran?</div>
</div>

<div class="ayat">
  <div class="arab">أَفَرَأَيْتُم مَّا تَحْرُثُونَ <span class="nomor">٦٣</span></div>
  <div class="latin">a fara-aitum mā taḥrūṡūn</div>
  <div class="terjemahan">Maka pernahkah kamu memperhatikan apa yang kamu tanam?</div>
</div>

<div class="ayat">
  <div class="arab">أَأَنتُمْ تَزْرَعُونَهُ أَمْ نَحْنُ الزَّارِعُونَ <span class="nomor">٦٤</span></div>
  <div class="latin">a’antum tazra‘ūnahu am naḥnuz-zāri‘ūn</div>
  <div class="terjemahan">Kamukah yang menumbuhkannya, atau Kami yang menumbuhkannya?</div>
</div>

<div class="ayat">
  <div class="arab">لَوْ نَشَاءُ لَجَعَلْنَاهُ حُطَامًا فَظَلْتُمْ تَفَكَّهُونَ <span class="nomor">٦٥</span></div>
  <div class="latin">lau nasyā’u laja‘alnāhu ḥuṭāmā faẓaltum tafakkahūn</div>
  <div class="terjemahan">Jika Kami kehendaki, niscaya Kami jadikan ia hancur, sehingga kamu heran tercengang.</div>
</div>

<div class="ayat">
  <div class="arab">إِنَّا لَمُغْرَمُونَ <span class="nomor">٦٦</span></div>
  <div class="latin">innā lamughramūn</div>
  <div class="terjemahan">(seraya berkata), “Sesungguhnya kami menderita kerugian.”</div>
</div>

<div class="ayat">
  <div class="arab">بَلْ نَحْنُ مَحْرُومُونَ <span class="nomor">٦٧</span></div>
  <div class="latin">bal naḥnu maḥrūmūn</div>
  <div class="terjemahan">“Bahkan kami tidak memperoleh apa-apa.”</div>
</div>

<div class="ayat">
  <div class="arab">أَفَرَأَيْتُمُ الْمَاءَ الَّذِي تَشْرَبُونَ <span class="nomor">٦٨</span></div>
  <div class="latin">a fara-aitumul-mā’al-lażī tasyrabūn</div>
  <div class="terjemahan">Maka pernahkah kamu memperhatikan air yang kamu minum?</div>
</div>

<div class="ayat">
  <div class="arab">أَأَنتُمْ أَنزَلْتُمُوهُ مِنَ الْمُزْنِ أَمْ نَحْنُ الْمُنزِلُونَ <span class="nomor">٦٩</span></div>
  <div class="latin">a’antum anzaltumūhu minal-muzni am naḥnul-munzilūn</div>
  <div class="terjemahan">Kamukah yang menurunkannya dari awan, atau Kami yang menurunkannya?</div>
</div>

<div class="ayat">
  <div class="arab">لَوْ نَشَاءُ جَعَلْنَاهُ أُجَاجًا فَلَوْلَا تَشْكُرُونَ <span class="nomor">٧٠</span></div>
  <div class="latin">lau nasyā’u ja‘alnāhu ujājā falau-lā tasykurūn</div>
  <div class="terjemahan">Jika Kami menghendaki, niscaya Kami jadikan dia asin; maka mengapa kamu tidak bersyukur?</div>
</div>

<div class="ayat">
  <div class="arab">أَفَرَأَيْتُمُ النَّارَ الَّتِي تُورُونَ <span class="nomor">٧١</span></div>
  <div class="latin">a fara-aitumun-nāral-latī tūrūn</div>
  <div class="terjemahan">Maka pernahkah kamu memperhatikan api yang kamu nyalakan?</div>
</div>

<div class="ayat">
  <div class="arab">أَأَنتُمْ أَنشَأْتُمْ شَجَرَتَهَا أَمْ نَحْنُ الْمُنشِئُونَ <span class="nomor">٧٢</span></div>
  <div class="latin">a’antum ansya’tum syajaratahā am naḥnul-munsyi’ūn</div>
  <div class="terjemahan">Kamukah yang menciptakan pohonnya atau Kami yang menciptakannya?</div>
</div>

<div class="ayat">
  <div class="arab">نَحْنُ جَعَلْنَاهَا تَذْكِرَةً وَمَتَاعًا لِّلْمُقْوِينَ <span class="nomor">٧٣</span></div>
  <div class="latin">naḥnu ja‘alnāhā tazkirah wa matā‘al-lil-muqwīn</div>
  <div class="terjemahan">Kami menjadikannya sebagai peringatan dan bahan berguna bagi musafir.</div>
</div>

<div class="ayat">
  <div class="arab">فَسَبِّحْ بِاسْمِ رَبِّكَ الْعَظِيمِ <span class="nomor">٧٤</span></div>
  <div class="latin">fa sabbiḥ bismi rabbikal-‘aẓīm</div>
  <div class="terjemahan">Maka bertasbihlah dengan (menyebut) nama Tuhanmu Yang Maha Besar.</div>
</div>

<div class="ayat">
  <div class="arab">فَلَا أُقْسِمُ بِمَوَاقِعِ النُّجُومِ <span class="nomor">٧٥</span></div>
  <div class="latin">falā uqsimu bimawāqi‘in-nujūm</div>
  <div class="terjemahan">Aku bersumpah demi tempat beredarnya bintang-bintang,</div>
</div>

<div class="ayat">
  <div class="arab">وَإِنَّهُ لَقَسَمٌ لَّوْ تَعْلَمُونَ عَظِيمٌ <span class="nomor">٧٦</span></div>
  <div class="latin">wa innahu laqasamun lau ta‘lamūna ‘aẓīm</div>
  <div class="terjemahan">dan sesungguhnya itu benar-benar sumpah yang besar jika kamu mengetahui,</div>
</div>

<div class="ayat">
  <div class="arab">إِنَّهُ لَقُرْآنٌ كَرِيمٌ <span class="nomor">٧٧</span></div>
  <div class="latin">innahu laqur’ānun karīm</div>
  <div class="terjemahan">sesungguhnya Al-Qur’an ini adalah bacaan yang mulia,</div>
</div>

<div class="ayat">
  <div class="arab">فِي كِتَابٍ مَّكْنُونٍ <span class="nomor">٧٨</span></div>
  <div class="latin">fī kitābin maknūn</div>
  <div class="terjemahan">yang tersimpan dalam kitab yang terpelihara,</div>
</div>

<div class="ayat">
  <div class="arab">لَّا يَمَسُّهُ إِلَّا الْمُطَهَّرُونَ <span class="nomor">٧٩</span></div>
  <div class="latin">lā yamas-suhū illal-muṭahharūn</div>
  <div class="terjemahan">tidak ada yang menyentuhnya selain hamba-hamba yang disucikan.</div>
</div>

<div class="ayat">
  <div class="arab">تَنزِيلٌ مِّن رَّبِّ الْعَالَمِينَ <span class="nomor">٨٠</span></div>
  <div class="latin">tanzīlum mir rabbil-‘ālamīn</div>
  <div class="terjemahan">Diturunkan dari Tuhan seluruh alam.</div>
</div>

<div class="ayat">
  <div class="arab">أَفَبِهَٰذَا الْحَدِيثِ أَنتُم مُّدْهِنُونَ <span class="nomor">٨١</span></div>
  <div class="latin">a fā bihāżal-ḥadīṡi antum mudhinūn</div>
  <div class="terjemahan">Maka apakah kamu menganggap remeh berita ini (Al-Qur’an)?</div>
</div>

<div class="ayat">
  <div class="arab">وَتَجْعَلُونَ رِزْقَكُمْ أَنَّكُمْ تُكَذِّبُونَ <span class="nomor">٨٢</span></div>
  <div class="latin">wa taj‘alūna rizqakum annakum tukażżibūn</div>
  <div class="terjemahan">dan kamu menjadikan rezekimu bahwa kamu mendustakan (nya).</div>
</div>

<div class="ayat">
  <div class="arab">فَلَوْلَا إِذَا بَلَغَتِ الْحُلْقُومَ <span class="nomor">٨٣</span></div>
  <div class="latin">falau-lā iżā balaghatil-ḥulqūm</div>
  <div class="terjemahan">Maka mengapa ketika nyawa sampai di tenggorokan,</div>
</div>

<div class="ayat">
  <div class="arab">وَأَنتُمْ حِينَئِذٍ تَنظُرُونَ <span class="nomor">٨٤</span></div>
  <div class="latin">wa antum ḥīna’iżin tanẓurūn</div>
  <div class="terjemahan">dan kamu ketika itu melihat,</div>
</div>

<div class="ayat">
  <div class="arab">وَنَحْنُ أَقْرَبُ إِلَيْهِ مِنكُمْ وَلَٰكِن لَّا تُبْصِرُونَ <span class="nomor">٨٥</span></div>
  <div class="latin">wa naḥnu aqrabu ilaihi minkum wa lākin lā tubṣirūn</div>
  <div class="terjemahan">sedangkan Kami lebih dekat kepadanya daripada kamu, tetapi kamu tidak melihat,</div>
</div>

<div class="ayat">
  <div class="arab">فَلَوْلَا إِن كُنتُمْ غَيْرَ مَدِينِينَ <span class="nomor">٨٦</span></div>
  <div class="latin">falau-lā in kuntum ghaira madīnīn</div>
  <div class="terjemahan">maka mengapa jika kamu tidak dikuasai (oleh Allah),</div>
</div>

<div class="ayat">
  <div class="arab">تَرْجِعُونَهَا إِن كُنتُمْ صَادِقِينَ <span class="nomor">٨٧</span></div>
  <div class="latin">tarji‘ūnahā in kuntum ṣādiqīn</div>
  <div class="terjemahan">kamu tidak mengembalikan nyawa itu (ke tempatnya) jika kamu orang-orang yang benar?</div>
</div>

<div class="ayat">
  <div class="arab">فَأَمَّا إِن كَانَ مِنَ الْمُقَرَّبِينَ <span class="nomor">٨٨</span></div>
  <div class="latin">fa ammā in kāna minal-muqarrabīn</div>
  <div class="terjemahan">Adapun jika dia termasuk orang-orang yang didekatkan (kepada Allah),</div>
</div>

<div class="ayat">
  <div class="arab">فَرَوْحٌ وَرَيْحَانٌ وَجَنَّتُ نَعِيمٍ <span class="nomor">٨٩</span></div>
  <div class="latin">fa rauḥun wa raiḥānun wa jannatu na‘īm</div>
  <div class="terjemahan">maka dia memperoleh ketenteraman, rezeki, dan surga penuh kenikmatan.</div>
</div>

<div class="ayat">
  <div class="arab">وَأَمَّا إِن كَانَ مِنْ أَصْحَابِ الْيَمِينِ <span class="nomor">٩٠</span></div>
  <div class="latin">wa ammā in kāna min aṣḥābil-yamīn</div>
  <div class="terjemahan">Dan adapun jika dia termasuk golongan kanan,</div>
</div>

<div class="ayat">
  <div class="arab">فَسَلَامٌ لَّكَ مِنْ أَصْحَابِ الْيَمِينِ <span class="nomor">٩١</span></div>
  <div class="latin">fa salāmun laka min aṣḥābil-yamīn</div>
  <div class="terjemahan">maka (dikatakan kepadanya), “Salam bagimu dari golongan kanan.”</div>
</div>

<div class="ayat">
  <div class="arab">وَأَمَّا إِن كَانَ مِنَ الْمُكَذِّبِينَ الضَّالِّينَ <span class="nomor">٩٢</span></div>
  <div class="latin">wa ammā in kāna minal-mukażżibīnaḍ-ḍāllīn</div>
  <div class="terjemahan">Dan adapun jika dia termasuk orang-orang yang mendustakan lagi sesat,</div>
</div>

<div class="ayat">
  <div class="arab">فَنُزُلٌ مِّنْ حَمِيمٍ <span class="nomor">٩٣</span></div>
  <div class="latin">fa nuzulum min ḥamīm</div>
  <div class="terjemahan">maka dia mendapat jamuan dari air yang mendidih,</div>
</div>

<div class="ayat">
  <div class="arab">وَتَصْلِيَةُ جَحِيمٍ <span class="nomor">٩٤</span></div>
  <div class="latin">wa taṣliyatu jaḥīm</div>
  <div class="terjemahan">dan dibakar di dalam neraka.</div>
</div>

<div class="ayat">
  <div class="arab">إِنَّ هَٰذَا لَهُوَ حَقُّ الْيَقِينِ <span class="nomor">٩٥</span></div>
  <div class="latin">inna hāżā lahuwa ḥaqqūl-yaqīn</div>
  <div class="terjemahan">Sesungguhnya ini benar-benar keyakinan yang pasti.</div>
</div>

<div class="ayat">
  <div class="arab">فَسَبِّحْ بِاسْمِ رَبِّكَ الْعَظِيمِ <span class="nomor">٩٦</span></div>
  <div class="latin">fa sabbiḥ bismi rabbikal-‘aẓīm</div>
  <div class="terjemahan">Maka bertasbihlah dengan (menyebut) nama Tuhanmu Yang Maha Besar.</div>
</div>

</div> <!-- penutup wrap -->
@endsection