export namespace events {
  // ======================
  // EventListener
  // ======================
  class EventListener {
    type: string | null;
    handler: Function | null;
    priolity: number;

    constructor(type?: string, handler?: Function, priolity?: number) {
      this.type = type || null;
      this.handler = handler || null;
      this.priolity = priolity || 0;
    }

    equalCurrentListener(type: string, handler: Function): boolean {
      return this.type === type && this.handler === handler;
    }
  }

  // ======================
  // Event
  // ======================
  export class Event {
    type: string | null;
    value: any;
    currentTarget: any = null;

    static COMPLETE: string = "complete";
    static CHANGE_PROPERTY: string = "changeProperty";

    constructor(type?: string, value?: any) {
      this.type = type || null;
      this.value = value || null;
    }
  }

  // ======================
  // EventDispatcher
  // ======================
  export class EventDispatcher {
    listeners: { [key: string]: EventListener[] } = {};

    dispatchEvent(event: Event | string): void {
      let e: Event;
      let type: string;

      if (event instanceof Event) {
        type = event.type!;
        e = event;
      } else {
        type = event;
        e = new Event(type);
      }

      if (this.listeners[type] != null) {
        e.currentTarget = this;
        for (let i = 0; i < this.listeners[type].length; i++) {
          let listener = this.listeners[type][i];
          try {
            listener.handler!(e);
          } catch (error) {
            if (window.console) console.error(error);
          }
        }
      }
    }

    addEventListener(
      type: string,
      callback: Function,
      priolity?: number
    ): void {
      if (priolity == null) priolity = 0;

      if (this.listeners[type] == null) this.listeners[type] = [];

      this.listeners[type].push(new EventListener(type, callback, priolity));

      this.listeners[type].sort(function (a, b) {
        return b.priolity - a.priolity;
      });
    }

    removeEventListener(type: string, callback: Function): void {
      if (!this.hasEventListener(type, callback)) return;

      for (let i = 0; i < this.listeners[type].length; i++) {
        let listener = this.listeners[type][i];
        if (listener.equalCurrentListener(type, callback)) {
          listener.handler = null;
          this.listeners[type].splice(i, 1);
          return;
        }
      }
    }

    clearEventListener(): void {
      this.listeners = {};
    }

    containEventListener(type: string): boolean {
      if (this.listeners[type] == null) return false;
      return this.listeners[type].length > 0;
    }

    hasEventListener(type: string, callback: Function): boolean {
      if (this.listeners[type] == null) return false;

      for (let i = 0; i < this.listeners[type].length; i++) {
        let listener = this.listeners[type][i];
        if (listener.equalCurrentListener(type, callback)) return true;
      }

      return false;
    }
  }
}
