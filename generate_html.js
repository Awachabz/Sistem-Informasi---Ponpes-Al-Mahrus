import fs from "fs";

const raw = fs.readFileSync("yasin.json", "utf-8");
const data = JSON.parse(raw);
const ayatList = data.data.verses;

let html = `
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<title>Surat Yasin</title>

<link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">

<style>
  body {
    font-family: 'Inter', sans-serif;
    background: #fafafa;
    color: #222;
    padding: 40px 12%;
    line-height: 1.9;
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
</head>
<body>

<h1>سُورَةُ یس</h1>
`;

ayatList.forEach((ayat) => {
  html += `
  <div class="ayat">
    <div class="arab">${ayat.text.arab} <span class="nomor">${ayat.number.inSurah}</span></div>
    <div class="latin">${ayat.text.transliteration.en}</div>
    <div class="terjemahan">${ayat.translation.id}</div>
  </div>
  `;
});

html += `
</body>
</html>
`;

fs.writeFileSync("yasin.html", html);
console.log("✅ Tampilan berhasil diperbarui → buka yasin.html");
