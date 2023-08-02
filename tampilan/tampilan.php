<div class="scrolling-title">
    <marquee behavior="scroll" direction="left">
      SELAMAT DATANG DI TAMPILAN SUHU 
    </marquee>
  </div>

<div class="temperature-container">
  <div class="temperature-card">
    <div class="temperature-info">
      <span class="temperature-value">25</span>
      <sup class="temperature-unit">°C</sup>
    </div>
    <div class="text-jalur">Jalur 1</div>
    <div class="temperature-bar">
      <div class="temperature-fill hot"></div>
    </div>
  </div>

  <div class="temperature-card">
    <div class="temperature-info">
      <span class="temperature-value">18</span>
      <sup class="temperature-unit">°C</sup>
    </div>
    <div class="text-jalur">Jalur 2</div>
    <div class="temperature-bar">
      <div class="temperature-fill moderate"></div>
    </div>
  </div>

  <div class="temperature-card">
    <div class="temperature-info">
      <span class="temperature-value">50</span>
      <sup class="temperature-unit">°C</sup>
    </div>
    <div class="text-jalur">Jalur 3</div>
    <div class="temperature-bar">
      <div class="temperature-fill cold"></div>
    </div>
  </div>

  <!-- Add four more temperature cards here -->

  <div class="temperature-card">
    <div class="temperature-info">
      <span class="temperature-value">22</span>
      <sup class="temperature-unit">°C</sup>
    </div>
    <div class="text-jalur">Jalur 4</div>
    <div class="temperature-bar">
      <div class="temperature-fill hot"></div>
    </div>
  </div>

  <div class="temperature-card">
    <div class="temperature-info">
      <span class="temperature-value">15</span>
      <sup class="temperature-unit">°C</sup>
    </div>
    <div class="text-jalur">Jalur 5</div>
    <div class="temperature-bar">
      <div class="temperature-fill moderate"></div>
    </div>
  </div>

  <div class="temperature-card">
    <div class="temperature-info">
      <span class="temperature-value">40</span>
      <sup class="temperature-unit">°C</sup>
    </div>
    <div class="text-jalur">Jalur 6</div>
    <div class="temperature-bar">
      <div class="temperature-fill cold"></div>
    </div>
  </div>

  <div class="temperature-card">
    <div class="temperature-info">
      <span class="temperature-value">28</span>
      <sup class="temperature-unit">°C</sup>
    </div>
    <div class="text-jalur">Jalur 7</div>
    <div class="temperature-bar">
      <div class="temperature-fill hot"></div>
    </div>
  </div>
</div>


<div class>
  <div class="copyright">
    &copy; PT.WJAYA KARYA BETON Tbk. Muhammad sirozul umam.
  </div>
</div>

<script>
  // Define temperature data as an array of objects
  const temperatureData = [
    { value: 25, unit: "°C", jalur: "Jalur 1", category: "hot" },
    { value: 18, unit: "°C", jalur: "Jalur 2", category: "moderate" },
    { value: 50, unit: "°C", jalur: "Jalur 3", category: "cold" },
    // Add more temperature data here
    { value: 22, unit: "°C", jalur: "Jalur 4", category: "hot" },
    { value: 15, unit: "°C", jalur: "Jalur 5", category: "moderate" },
    { value: 40, unit: "°C", jalur: "Jalur 6", category: "cold" },
    { value: 28, unit: "°C", jalur: "Jalur 7", category: "hot" },
  ];

  // Function to create and append temperature cards dynamically
  function createTemperatureCard(data) {
    const container = document.getElementById("temperature-container");
    const card = document.createElement("div");
    card.className = "temperature-card";
    card.innerHTML = `
      <div class="temperature-info">
        <span class="temperature-value">${data.value}</span>
        <sup class="temperature-unit">${data.unit}</sup>
      </div>
      <div class="text-jalur">${data.jalur}</div>
      <div class="temperature-bar">
        <div class="temperature-fill ${data.category}"></div>
      </div>
    `;
    container.appendChild(card);
  }

  // Loop through temperature data and create temperature cards
  temperatureData.forEach((data) => createTemperatureCard(data));
</script>

<script>
  // Limit the temperature to 120°C
  const temperatureCards = document.querySelectorAll(".temperature-card");
  temperatureCards.forEach(card => {
    const temperatureValue = card.querySelector(".temperature-value");
    const temperature = parseInt(temperatureValue.textContent);
    if (temperature > 120) {
      temperatureValue.textContent = "120";
    }
  });
</script>

<style>
    .temperature-container {
  display: flex;
  justify-content: space-around;
  background-color: #2F4F4F;
  padding: 200px;
}

.temperature-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 10px;
  background-color: #f2f2f2;
  border-radius: 200px;
}

.temperature-info {
  display: flex;
  align-items: baseline;
}

.temperature-value {
  font-size: 36px;
  font-weight: bold;
  color: #333333;
}

.temperature-unit {
  font-size: 18px;
  color: #555555;
}

.temperature-bar {
  width: 100px;
  height: 100px;
  margin-top: 100px;
  background-color: 00CED1;
  border-radius: 50px;
  overflow: hidden;
}

.temperature-fill {
  height: 100%;
  background-color: #FAEBD7;
  width: 0;
  transition: width 15s ease-in-out;
}

.text-jalur {
  font-size: 18px;
  font-weight: bold;
  font-family: Arial, sans-serif;
  color: #333333;
  margin-top: 10px;
}

.scrolling-title {
    width: 100%;
    padding: 10px 0;
    background-color: #5F9EA0;
    text-align: center;
  }

  .scrolling-title marquee {
    font-size: 60px;
    color: #333333;
    font-weight: bold;
  }
  .copyright {
    text-align: center;
    color: #f2f2f2;
    font-size: 15px;
    padding: 15px;
    background-color: #2F4F4F;
  }
.hot {
  background-color: #ff0000;
}

.moderate {
  background-color: #ff8c00;
}

.cold {
  background-color: #00bfff;
}

.hot .temperature-fill {
  animation: fillAnimationHot 10s forwards;
}

.moderate .temperature-fill {
  animation: fillAnimationModerate 10s forwards;
}

.cold .temperature-fill {
  animation: fillAnimationCold 10s forwards;
}

@keyframes fillAnimationHot {
  0% {
    width: 0;
  }
  100% {
    width: 100%;
  }
}

@keyframes fillAnimationModerate {
  0% {
    width: 0;
  }
  100% {
    width: 60%;
  }
}

@keyframes fillAnimationCold {
  0% {
    width: 0;
  }
  100% {
    width: 100%;
  }
}
</style>