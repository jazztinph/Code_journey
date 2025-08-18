// C++ code
//
int led1 = 13;
int poten = A0;
void setup()
{
  Serial.begin(9600); 
  pinMode(led1, OUTPUT);
  pinMode(poten, INPUT);

}

void loop()
{
  int value = analogRead(poten);  
  int cal = value / 4;
  Serial.println(cal);
  
  
  analogWrite(led1, cal);
  delay(500); // Delay a little bit to improve simulation performance
}
