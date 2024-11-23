list = [1, 2, 3, None, (1, 2, 3, 4, 5), ['Geeks', 'for', 'Geeks']]
print(len(list))
# Find square root of real or complex numbers
# Importing the complex math module
import cmath

num = 1+2j

# To take input from the user
#num = eval(input('Enter a number: '))

num_sqrt = cmath.sqrt(num)
print('The square root of {0} is {1:0.3f}+{2:0.3f}j'.format(num ,num_sqrt.real,num_sqrt.imag))
# Solve the quadratic equation ax**2 + bx + c = 0

# import complex math module
import cmath

a = 1
b = 5
c = 6

# calculate the discriminant
d = (b**2) - (4*a*c)

# find two solutions
sol1 = (-b-cmath.sqrt(d))/(2*a)
sol2 = (-b+cmath.sqrt(d))/(2*a)


print('The solution are {0} and {1}'.format(sol1,sol2))
