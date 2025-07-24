#ifndef LASER_MODULE_H
#define LASER_MODULE_H

#define LASER_PIN     2
#define LASER_SENSOR  3
#define LED_PIN       4
#define BUZZER_PIN    11

void setupLaserModule() {
  pinMode(LASER_PIN, OUTPUT);
  pinMode(LASER_SENSOR, INPUT);
  pinMode(LED_PIN, OUTPUT);
  pinMode(BUZZER_PIN, OUTPUT);
  digitalWrite(LASER_PIN, LOW);  // Laser OFF by default
}

// Turn laser ON or OFF
void setLaser(bool on) {
  digitalWrite(LASER_PIN, on ? HIGH : LOW);
}

bool checkLaserInterrupted() {
  return digitalRead(LASER_SENSOR) == HIGH;
}

void triggerAlert() {
  digitalWrite(LED_PIN, HIGH);
  tone(BUZZER_PIN, 800, 200);
}

void clearAlert() {
  digitalWrite(LED_PIN, LOW);
  noTone(BUZZER_PIN);
}

#endif
