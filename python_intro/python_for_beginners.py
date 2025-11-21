# print age if valid or not

age = int(99)
output = age;

if age >= 18 and age <= 59:
    print("Valid")
elif age >= 60:
    print("Senior Citizen!")
else:
    print("Invalid!")



def age_output():
# displaying age with datatype
    print(type(output))
    

age_output() #call function age_output