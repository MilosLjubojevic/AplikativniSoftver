from socket import socket,AF_INET, SOCK_STREAM
import sys

# Create a TCP/IP socket
sock = socket(AF_INET, SOCK_STREAM)

# Bind the socket to the port
server_address = ('localhost', 10000)
print('Starting up on %s port %s' % server_address, file=sys.stderr)
sock.bind(server_address)
# Listen for incoming connections
sock.listen(1)
while True:
    # Wait for a connection
    print('\nWaiting for a connection', file=sys.stderr)
    connection, client_address = sock.accept()
    try:
        print('Connection from', client_address, file=sys.stderr)
        
        # Receive the data in small chunks and retransmit it
        while True:
            data = connection.recv(16)
            print('Received: "%s"' % data, file=sys.stderr)
            if data:
                print('Sending data back to the client', file=sys.stderr)
                connection.sendall(data)
            else:
                print('No more data from', client_address, file=sys.stderr)
                break
    finally:
        # Clean up the connection
        connection.close()
