# We have been given a PDF document with problems

## The first problem is `Count the Cubes`

Essentially we are required to calculate the volume of shapes made up from unit cubes.

a) Is a 3x3x3 Square with no gaps, therefore there are 27 cubes.

b) Is half a 4x3x4 Square, therefore there are 24 cubes.

## The second problem is called `Bill the Farmer`

This is the problem where you are required to move 3 objects which when together conflict across a river.

Baiscally the trick is to remember you can take one oject there and you can bring the one which is already there back.

So the solution is:

1. Take the rabbit across the river
2. Leave the rabbit there, and go back to where the fox & the carrots are.
3. Take the fox across the river.
4. Take the rabbit back with you when you return to the carrots leaving the fox on the other side of the river.
5. Switch the carrots and the rabbit leaving the rabbit and taking the carrots across to where the fox is.
6. Leave the carrots there and take go back to fetch the rabbit.
7. Take the rabbit across the river.

## The 3rd problem is called `Rephrasing`

Basically, its asking you to compute 2/3 of 1/2.
Essentially, this is 1/3.

## The 4th problem is called `Who ate the pie?`

We are given a problem with 3 children, 2 of which always lie and one tells the truth.

The children are asked.
Who ate the pie?

To which they respond:

1. Child 1: I did not eat the pie
2. Child 2: Child 1 is lying.
3. Child 3: Child 2 is lying.

It happens that the first case I tested was right.
What if child 1 is lying. Well then child 2 would be telling the truth and child 3 is then lying. Which fits our parameters.
Therefore child 1 ate the pie.

However, there is another case.
If child 1 is not lying, then child 2 will be lying & child 3 would not be lying. however this does not work since there must alway be 2 lies.

## The 5th problem is called `Bird Train`

We are given a problem where 2 trains are moving towards eachother, they are 100 miles apart and the distance between them is closing at 100miles/hour.
The question broken down is asking how far the bird will travel before the trains collide. The bird travels at 90 miles per hour.
Therefore the answer is 90miles.

## The 6th problem is an extension on the 5th also called `Bird Train`

This time the question is abstracted in terms of x,y,z and D

Where x is how fast one train moves, y is how fast another train travels, z is how fast the bird travels and D is the distance between the 2 trains.

Well, the general solution is:

`t = D / (x + y)`
This will give us the amount of time until the 2 trains collide.
We can then take this and multiply it by `z` which is the speed of the bird.

Giving us
`bird_distance = Dz / (x + y)`

## The 7th problem is called `Arithmetic Sequences`

Given a sequencw
`3,7,11,15,19` what is the 10th, 50th, nth term.

Well this sequence is linear in the form of
`T(n) = 4n + 3`

Therefore the 10th term will be: 43

The 50th term is: 203

The nth term is: 4n + 3

## The 8th problem is called `Quick Adding`

Basically this problem is asking how to quickly add the range of 1 - 100

There happens to be a math formula for this

`Sn = n(n+1) / 2`

Therefor the sum of the first 100 digits would be
`100(101)/2 = 5050`

## Big O notation time complexity and space complexity

They have a few examples on Space complexity however the examples are incorrect.

They then ask about time complexity.

What is the time complexity of a function which uses a loop?
This would be `O(n) where n is the number of times the loop is executed if we cannot break out early`

What is the time complexity of a function where it is an equation?
This would be `O(1) since regardless of the parameters the equation is evaluated in constant time`

## The 9th problem is called `The Container Problem`

If you have a 4ml flask and a 7ml flask how do you measure 5ml?

Well, first fill up the 4ml flask and then pour that into the 7ml flask. Then do this again, you should be left with 1ml in the 4ml flask. (since 4 + 4 = 8 - 7 = 1)

We can then pour out the contets of the 7ml flask and pour our newly measured 1ml into the 7ml flask. We can then fill up the 4ml flask and pour it into the 7ml flask to have a total of 5ml in the 7ml flask (4 + 1 = 5)

## The 10th problem is called `Hose Problem`

If one hose takes 20min to fill the bucket, and another takes 30min to fill a bucket, if we used both at the same time how long would it take to fill the bucket.

Well, we have 2 equations:
`x = 1/20` and `y = 1/30`

Therefore every min `1/20 + 1/30` | `5 / 60` | `1 / 12` each min.
Therefore it would take 12 min to fill up the bucket.

## The 11th problem is called `Pond Weed`

If the plant doubles in size every day, and at day 30 it is 100% of the pond.

The plant must have covered half the pond on day 29, and a quarter on day 28.

## The 12th problem is called `The Timer Problem`

Start the 4min and the 7min timer.
When the 4min timer goes off restart it, and when the 7min timer goes off start cooking.

This way the next 4min timer will go off exactly 1min after you started cooking, and all you have to do is wait 2 more 4min timer intervals for a total of 9min (1 + 4 + 4 = 9)

## The 13th problem is called `The Investment Problem`

1) If you want to increase an amount by 10% you must multiply by `1.1`

2) If you want to increase an amount by 17% you must multiply by `1.17`

3) `A` euros are invested in a savings fund of 4% (most savings funds are compound, but i think this is simple, however i will do both). How much is required to be invested to have a value of 10 000 over 5 years.

So if it is simple:

```math
A = P(1 + rt)
10 000 = P(1 + 0.04 * 5)
P = 8333.33
```

If the savings is compound:

```math
A = P(1 + r/n)^(nt)
10 000 = P(1 + 0.04/4)^(4*5)
P = 8195.44
```

## The 14th problem is called `Find the sum`

Find the sum of the sequence `1024 + 512 + 256 + 128 .. 1`

Well, this sequence isnt infinite.

And its just

`Sigma(n = 0, 10) (2^(10-n))`

This results in `2047`

Its also handy to notice that this results in one less than 2 ^ 11.

It might be general that `Sigma(n = 0, m) (z^(m-n)) = z^(m + 1) - 1`

Not sure...
