text_before = "moneyforward"
text_after = ""
num = 0

text_before.split("").each do |letter|
    if letter == "o"
        letter = num
        num += 1
    end
    text_after = text_after + letter.to_s
end
p text_after