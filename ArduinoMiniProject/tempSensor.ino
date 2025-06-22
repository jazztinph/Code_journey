// Temperature Sensor Reading (LM35 example)
// This reads analog input and converts it to Celsius

void setup() {
  Serial.begin(9600);        // Start serial monitor for output
  pinMode(A0, INPUT);        // Set A0 as input
}

void loop() {
  int sensorValue = analogRead(A0); // Read raw analog value
  float voltage = sensorValue * (5.0 / 1023.0); // Convert to voltage
  float temperatureC = voltage * 100.0; // LM35 gives 10mV per °C

  Serial.print("Raw: ");
  Serial.print(sensorValue);
  Serial.print(" | Temp: ");
  Serial.print(temperatureC);
  Serial.println(" °C");

  delay(1000); // 1-second delay between readings
}
