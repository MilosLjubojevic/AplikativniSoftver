from socket import socket, AF_INET, SOCK_STREAM

HOST = '127.0.0.1'  # adresa interfejsa (localhost)
PORT = 10000        # port za osluškivanje(> 1023)

s = socket(AF_INET, SOCK_STREAM)
s.bind((HOST, PORT))
print("Waiting for connection")
s.listen()
conn, addr = s.accept()

print('Connected by', addr)
while True:
    data = conn.recv(1024)
    print('Received:', repr(data))
    if not data:
        break
    conn.sendall(data.replace(b"serveru", b"kljente"))
