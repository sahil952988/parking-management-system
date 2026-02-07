<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hero</title>
  <link rel="stylesheet" href="/parking/assets/CSS/hero.css">
</head>

<body>
  <div class="hero-img">
    <img src="/parking/assets/images/hero-bg-image.jpeg" alt="hero-img">

    <div class="search">
      <p style="font-size: 2.5rem;">Travel stress-free, <span style="color: #3CB371;">parking</span> is taken care of!</p>
      <form>
        <select>
          <option>Where do you want to park?</option>
          <option>Norvic Hospital</option>
          <option>Civil Mall</option>
          <option>Thamel</option>
        </select>
        <input type="text" placeholder="Arrival" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
        <input type="text" placeholder="Time" onfocus="(this.type='time')" onblur="if(!this.value)this.type='text'">
        <input type="text" placeholder="Departure" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
        <input type="text" placeholder="Time" onfocus="(this.type='time')" onblur="if(!this.value)this.type='text'">
        <button type="submit">Search</button>
      </form>
    </div>
  </div>
</body>

</html>