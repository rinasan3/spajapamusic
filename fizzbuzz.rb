range = 1..100
range.each do |num|
    if num % 15 == 0
        p "FizzBuzz"
    elsif num % 3 == 0
        p "Fizz"
    elsif num % 5 == 0
        p "Buzz"
    else
        p num
    end
end