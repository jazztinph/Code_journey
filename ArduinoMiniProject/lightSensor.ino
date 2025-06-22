// C++ code
//
int light = 0;

void setup()
{
  pinMode(13, OUTPUT);
  pinMode(A0, INPUT);
  Serial.begin(9600);

  digitalWrite(13, LOW);
}

void loop()
{
  light = analogRead(A0);
  Serial.println(light);
  if (light > 500) {
    digitalWrite(13, HIGH);
  } else {
    digitalWrite(13, LOW);
  }
  delay(10); // Delay a little bit to improve simulation performance
}