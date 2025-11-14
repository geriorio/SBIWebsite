# Video Background untuk Hero Section

## 📹 Rekomendasi Video

Untuk mendapatkan video background AI/tech theme yang premium:

### 🎥 Sumber Gratis:
1. **Pexels Videos** - https://www.pexels.com/videos/
   - Search: "AI technology", "data visualization", "digital network", "circuit board"
   - Download dalam format MP4

2. **Pixabay Videos** - https://pixabay.com/videos/
   - Search: "technology background", "digital", "cyber"

3. **Coverr** - https://coverr.co/
   - Kategori: Technology, Abstract

### 💎 Sumber Premium (Berbayar):
1. **Artgrid** - https://artgrid.io/
2. **Storyblocks** - https://www.storyblocks.com/
3. **Motion Array** - https://motionarray.com/

### 🎨 AI-Generated Video:
1. **RunwayML** - https://runwayml.com/
   - Generate custom AI videos
   
2. **Pika Labs** - https://pika.art/
   - Text-to-video AI

## 📋 Spesifikasi Video yang Direkomendasikan

- **Format**: MP4 (H.264) + WebM (untuk compatibility)
- **Resolusi**: 1920x1080 (Full HD) atau 4K
- **Durasi**: 10-30 detik (akan loop)
- **File size**: < 5MB (optimize untuk web)
- **Framerate**: 30fps atau 60fps
- **Theme**: 
  - Digital/cyber effects
  - Data visualization
  - Circuit boards
  - Abstract tech patterns
  - AI/neural networks
  - Particle systems

## 🛠️ Cara Memasang

1. Download video dari sumber di atas
2. Rename menjadi `hero-bg.mp4`
3. (Optional) Convert ke WebM untuk better browser support:
   ```bash
   ffmpeg -i hero-bg.mp4 -c:v libvpx-vp9 -crf 30 -b:v 0 hero-bg.webm
   ```
4. Place file di folder `public/videos/`
5. (Optional) Buat poster image (screenshot frame pertama):
   - Simpan sebagai `hero-poster.jpg` di `public/images/`

## 🎬 Optimisasi Video

Jika video terlalu besar, compress dengan:

### Online Tools:
- https://www.freeconvert.com/video-compressor
- https://www.videosmaller.com/

### FFmpeg Command:
```bash
# Compress dan optimize
ffmpeg -i input.mp4 -vcodec h264 -crf 28 -preset slow -vf scale=1920:1080 hero-bg.mp4

# Create WebM version
ffmpeg -i input.mp4 -c:v libvpx-vp9 -crf 30 -b:v 0 -vf scale=1920:1080 hero-bg.webm
```

## 🎯 Keyword Pencarian Video

Cari dengan keywords ini untuk hasil terbaik:
- "AI artificial intelligence loop"
- "digital data stream"
- "technology particles"
- "cyber circuit board"
- "futuristic network"
- "abstract tech background"
- "digital transformation"
- "code matrix"
- "neural network animation"

## ✨ Tips

1. **Pilih video yang subtle** - jangan terlalu ramai/mengganggu text
2. **Dark/blue theme** - cocok dengan color scheme website
3. **Slow motion** - lebih elegant (JavaScript akan slow down playback ke 0.75x)
4. **Loop seamless** - pilih video yang bisa loop mulus
5. **No audio** - video akan di-mute otomatis

## 🔥 Contoh Video Bagus

Berikut beberapa link video yang recommended (gratis):
- https://www.pexels.com/video/digital-projection-of-abstract-geometrical-lines-3129671/
- https://www.pexels.com/video/an-animated-wave-with-lights-3130284/
- https://pixabay.com/videos/particles-wave-sound-design-107166/

---

**Note**: Jika video tidak ada, website akan fallback ke animated gradient background yang sudah ada di CSS.
