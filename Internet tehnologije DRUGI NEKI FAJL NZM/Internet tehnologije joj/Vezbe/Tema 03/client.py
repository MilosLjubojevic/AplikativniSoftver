from socket import socket, AF_INET, SOCK_STREAM

HOST = '127.0.0.1'  # naziv servera (hostname) ili IP adresa
PORT = 10000        # port servera

s = socket(AF_INET, SOCK_STREAM)
s.connect((HOST, PORT))
s.sendall(b'Dobar dan, serveru!')
data = s.recv(1024)

print('Received:', repr(data))
