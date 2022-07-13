#include <Wire.h> 
#include <LiquidCrystal_I2C.h>
LiquidCrystal_I2C lcd(0x20,16,2); 


//define LED
  const int TRED = 8;
  const int TBLU = 10; 
  const int TGRE = 9;
  const int TYEL = 6;
  int RState = LOW;
  int YState = LOW;
  int GState = LOW;
  int BState = LOW;
  const int IN = 3;

  int instate=0;
  String plate ="TDCC345";
  int t;
  unsigned long last_time, now_time;
  const long interval = 3000;
  unsigned long previousMillis = 0; 
  
 

void setup() {
  t=0;
  lcd.init();                 //Init the LCD
  lcd.backlight();            //Activate backlight     
  lcd.home();
  last_time = micros();
  pinMode(IN, INPUT);
  pinMode(TRED, OUTPUT);
  pinMode(TBLU, OUTPUT);
  pinMode(TGRE, OUTPUT);
  pinMode(TYEL, OUTPUT);
  Serial.begin(9600); // Starts the serial communication

  lcd.clear();
  lcd.print("Smart Trafic");
  delay(1000);
  lcd.clear();

}

void loop() {

  unsigned long currentMillis = millis();

    if (currentMillis - previousMillis >= 0 && currentMillis - previousMillis <= interval) {
   
    if (GState == LOW) {
      GState = HIGH;
      YState = LOW;
      RState = LOW;
    }
    }

    if (currentMillis - previousMillis > interval&&currentMillis - previousMillis <= interval+1000) {
    
    if (YState == LOW) {
      YState = HIGH;
       GState = LOW;
       RState = LOW;
    }
    }

    if (currentMillis - previousMillis >= interval+1000 && currentMillis - previousMillis <= interval+2000) {
    if (RState == LOW) {
      RState = HIGH;
      GState = LOW;
      YState = LOW;


      if(digitalRead(IN)==HIGH&&RState==HIGH){

      if (RState==HIGH){
        digitalWrite(TBLU,HIGH);
        Serial.print("Red light vioolation: ");
        Serial.println();
        Serial.print("Capturing Vehicle Plate no: ");
        Serial.println();
        Serial.print("PLATE NO: ");
        Serial.print(plate);
        Serial.println();
          lcd.clear();
          lcd.setCursor(1,1);
          lcd.print("PLATE NO: ");
          lcd.setCursor(14,1);
          lcd.print(plate);
        }
        else{
          digitalWrite(TBLU,LOW);
          }

      }
    }
    
    }
    if (currentMillis - previousMillis > interval+2000 && currentMillis - previousMillis <= interval+2200) {
    previousMillis = currentMillis;
    }

    digitalWrite(TGRE,GState);
    digitalWrite(TYEL,YState);
    digitalWrite(TRED,RState);

    

    if(digitalRead(TRED)==HIGH){
      lcd.setCursor(0,0);
      lcd.print("STOP: ");

    }

//  digitalWrite(TGRE,HIGH);
//  digitalWrite(TYEL,LOW);
//  digitalWrite(TRED,LOW);
//
//    if(digitalRead(TGRE)==HIGH){
//      lcd.setCursor(0,0);
//      lcd.print("GO: ");
//      digitalWrite(IN,LOW);
//    }
//  
//  delay(5000);
//    digitalWrite(TYEL,HIGH);
//    digitalWrite(TRED,LOW);
//    digitalWrite(TGRE,LOW);
//
//    if(digitalRead(TYEL)==HIGH){
//      lcd.setCursor(0,0);
//      lcd.print("WARN: ");
//      digitalWrite(IN,LOW);
//    }
//
//  delay(2000);
//    digitalWrite(TRED,HIGH);
//    digitalWrite(TYEL,LOW);
//    digitalWrite(TGRE,LOW);
//

  
  

         
  Serial.print("ok:");
  Serial.print("\t");
  Serial.print(t);
  Serial.println();
//
//
//
  
  if(digitalRead(TGRE)==HIGH){
    lcd.setCursor(0,0);
    lcd.print("GO: ");
    }
  if(digitalRead(TYEL)==HIGH){
    lcd.setCursor(0,0);
    lcd.print("WARN: ");
    }
  lcd.setCursor(10,0);
  lcd.print(currentMillis);  
//  lcd.setCursor(18,0);
//  lcd.print("of");
//  lcd.setCursor(18,0);
//  lcd.print(park);
//  lcd.setCursor(1,1);
//  lcd.print("IN");
//  lcd.setCursor(6,1);
//  lcd.print(inpark);
//  lcd.setCursor(9,1);
//  lcd.print(" ALL IN:");
//  lcd.setCursor(16,1);
//  lcd.print(inparktotal);
//  lcd.setCursor(1,2);
//  lcd.print("ALL OUT");
//  lcd.setCursor(10,2);
//  lcd.print(outparktotal);
  
       
//  delay(5000);

  
 t++;
  
}
