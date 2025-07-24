#include "laser_module.h"  // Import laser functions

#define TRIG_PIN 9
#define ECHO_PIN 10

const int DISTANCE_THRESHOLD = 15;

void setup() {
  Serial.begin(9600);
  setupLaserModule();

  pinMode(TRIG_PIN, OUTPUT);
  pinMode(ECHO_PIN, INPUT);

  Serial.println("System Initialized");
}

void loop() {
  int distance = measureDistance();
  bool objectClose = (distance > 0 && distance <= DISTANCE_THRESHOLD);

  // Control laser power based on distance
  if (distance > 0 && distance <= 10) {
    setLaser(true);  // Turn laser ON
  } else {
    setLaser(false); // Turn laser OFF
  }

  // Read laser status only if laser is ON
  bool laserInterrupted = false;
  if (distance <= 10) {
    laserInterrupted = checkLaserInterrupted();
  }

  // Display status
  Serial.print("Laser: ");
  Serial.print((distance <= 10) ? (laserInterrupted ? "INTERRUPTED" : "CLEAR") : "OFF");
  Serial.print(" | Distance: ");
  Serial.print(distance);
  Serial.println(" cm");

  // Alert if either laser is interrupted or object is close
  if (distance <= 10 && (laserInterrupted && objectClose)) {
    triggerAlert();
    Serial.println(">> OBJECT DETECTED <<");
  } else {
    clearAlert();
    Serial.println(">> CLEAR <<");
  }

  delay(1000);
}

int measureDistance() {
  digitalWrite(TRIG_PIN, LOW);
  delayMicroseconds(2);
  digitalWrite(TRIG_PIN, HIGH);
  delayMicroseconds(10);
  digitalWrite(TRIG_PIN, LOW);

  long duration = pulseIn(ECHO_PIN, HIGH);
  return (duration == 0) ? -1 : (duration * 0.034 / 2);
}
