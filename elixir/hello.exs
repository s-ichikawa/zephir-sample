IO.puts "Hello, World!"
for a <- [1,2,3] do
  IO.puts a
end

{status, file} = File.open("hello.exs")
IO.puts status
