import axios from "axios";
import fs from "fs";

async function fetch() {
  try {
    const url = "https://api.quran.gading.dev/surah/36";

    console.log("⏳ Mengambil data Yasin dari API...");
    const response = await axios.get(url);
    const data = response.data;

    // Simpan ke file
    fs.writeFileSync("yasin.json", JSON.stringify(data, null, 2));

    console.log("✅ Data berhasil disimpan ke yasin.json");
  } catch (error) {
    console.error("❌ Gagal mengambil data:", error.message);
  }
}

fetch();
