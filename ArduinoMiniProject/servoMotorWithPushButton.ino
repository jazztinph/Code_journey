#include <Servo.h>

Servo myServo;
const int servoPin = 9;
const int buttonPin = 6;

bool lastButtonState = HIGH;
bool currentButtonState = HIGH;
bool isAt90 = false;  // Track servo position

void setup() {
  Serial.begin(9600);
  myServo.attach(servoPin);
  pinMode(buttonPin, INPUT_PULLUP);  // Use internal pull-up
  myServo.write(0);                  // Start at 0°
  delay(800);
  myServo.detach();                  // Detach to save power
}

void loop() {
  currentButtonState = digitalRead(buttonPin);

  // Check for falling edge (button press)
  if (lastButtonState == HIGH && currentButtonState == LOW) {
    Serial.println("Button Pressed");

    if (!isAt90) {
      Serial.println("Moving to 90°...");
      myServo.attach(servoPin);
      myServo.write(90);
      delay(800);
      myServo.detach();
      isAt90 = true;
    } else {
      Serial.println("Moving to 0°...");
      myServo.attach(servoPin);
      myServo.write(0);
      delay(800);
      myServo.detach();
      isAt90 = false;
    }
  }

  lastButtonState = currentButtonState;  // Update button state
  delay(50);  // Debounce delay
}
