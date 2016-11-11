IO.puts "Hello, World!"
for {a, b} <- [{1,2},{3,4},{5,6}] do
  IO.puts a
  IO.puts b
end

{status, file} = File.open("hello.exs")
IO.puts status

